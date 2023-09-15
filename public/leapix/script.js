import axios from 'axios';
import { v4 as uuidv4 } from 'uuid';

const correlationId = uuidv4();

const accessToken = "kRSaHI68BJYL7ZzRyVn74LJQmXFzLQlF"

await axios.post('https://api.leiapix.com/api/v1/disparity', {
  correlationId,
  inputImageUrl: ORIGINAL_IMAGE_URL, // this can be any image you want to get disparity for
  resultPresignedUrl: putDisparityPresignedUrl // acquired in previous step
}, {
  headers: {
    Authorization: `Bearer ${accessToken}` // acquired in previous step
  },
  timeout: 5 * 60 * 1000, // request times out after 5 minutes
});

