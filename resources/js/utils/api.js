import axios from 'axios';

export const useApi = (opts = null) => {
    const options = {
        base_url: opts || '',
        ...opts
    }

    return {
        get(url = '', config = {}) {
            return new Promise((resolve, reject) => {
                axios.get(`${options.base_url}/${url}`, config)
                .then(response => {
                    resolve(response.data);
                }).catch(err => {
                    reject(err.data);
                })
            })
        },
        post(url = '', data = {}, config = {}) {
            return new Promise((resolve, reject) => {
                axios.post(`${options.base_url}/${url}`, data, config)
                .then(response => {
                    resolve(response.data);
                }).catch(err => {
                    if(err.response) {
                        reject(err.response.data);
                    }
                })
            })
        }
    }
}