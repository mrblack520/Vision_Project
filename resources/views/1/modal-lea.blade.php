<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeiaPix API Demo</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <h1>LeiaPix API Demo</h1>

    <form id="leiaPixForm">
        <label for="imageURL">Image URL:</label>
        <input type="text" id="imageURL" name="imageURL" required>
        <button type="submit">Get Disparity</button>
    </form>

    <div id="result"></div>

    <script>
        document.getElementById('leiaPixForm').addEventListener('submit', async function (e) {
            e.preventDefault();


    const correlationId = "3d087db9-5fdb-4d5e-9dde-df067ab733b3"; // Replace with Laravel variable if available
    const accessToken = 'https://auth.leialoft.com/auth/realms/leialoft/protocol/openid-connect/token';
        const ORIGINAL_IMAGE_URL = document.getElementById('imageURL').value;

    // try {
        // const response = await axios.post('https://api.leiapix.com/api/v1/disparity', {
        //     correlationId,
        //     inputImageUrl: ORIGINAL_IMAGE_URL,
        //     resultPresignedUrl: '', // Replace with actual presigned URL if needed
        // }, {
        //     headers: {
        //         Authorization: `Bearer ${accessToken}`,
        //     },
        //     timeout: 5 * 60 * 1000,
        // });



            $.post("https://api.leiapix.com/api/v1/disparity",

            {
  "correlationId": correlationId,
  "inputImageUrl": ORIGINAL_IMAGE_URL,
  "resultPresignedUrl": "",
  "dilation": -0.01
}

            ,(response)=>{

                    console.log(response);

            });

    //     const result = response.data; // Modify as needed to handle the API response
    //     document.getElementById('result').innerHTML = `<p>Disparity: ${result}</p>`;
    // } catch (error) {
    //     console.error('Error:', error);
    //     document.getElementById('result').innerHTML = '<p>An error occurred while processing the request.</p>';

});
</script>



    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</body>
</html>
