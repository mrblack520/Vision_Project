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
