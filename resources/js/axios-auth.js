import axios from "axios";

const instance = axios.create({
    baseURL: import.meta.env.VITE_AUTH_URL
});

export default instance