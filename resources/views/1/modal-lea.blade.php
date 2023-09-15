<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeiaPix API Demo</title>
</head>
<body>
    <h1>LeiaPix API Demo</h1>

    <form id="leiaPixForm">
        <label for="imageURL">Image URL:</label>
        <input type="text" id="imageURL" name="imageURL" required>
        <button type="submit">Get Disparity</button>
    </form>

    <div id="result"></div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.getElementById('leiaPixForm').addEventListener('submit', async function (e) {
            e.preventDefault();

            const correlationId = '{{ $correlationId }}'; // Replace with Laravel variable if available
            const accessToken = 'kRSaHI68BJYL7ZzRyVn74LJQmXFzLQlF';
            const ORIGINAL_IMAGE_URL = document.getElementById('imageURL').value;

            try {
                const response = await axios.post('https://api.leiapix.com/api/v1/disparity', {
                    correlationId,
                    inputImageUrl: ORIGINAL_IMAGE_URL,
                    resultPresignedUrl: '', // Replace with actual presigned URL if needed
                }, {
                    headers: {
                        Authorization: `Bearer ${accessToken}`,
                    },
                    timeout: 5 * 60 * 1000,
                });

                const result = response.data; // Modify as needed to handle the API response
                document.getElementById('result').innerHTML = `<p>Disparity: ${result}</p>`;
            } catch (error) {
                console.error('Error:', error);
                document.getElementById('result').innerHTML = '<p>An error occurred while processing the request.</p>';
            }
        });
    </script>
</body>
</html>
