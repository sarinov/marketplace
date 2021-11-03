import axios from 'axios'

export const registerUser = (userData, history) => dispatch => {
    axios.post (
        '/api/register', userData
    ).then (res=> {
        history.push('/login')
        console.log(res.data)
    })
}

export const loginUser = (userData) => dispatch => {
    axios.post (
        '/api/login', userData
    ).then (res=> {
        const {access_token} = res.data
        localStorage.setItem("token", access_token)
    })
}