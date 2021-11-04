import axios from 'axios'
import {GET_PRODUCTS} from '../actions/types'

export const addProducts = (productData, history) => dispatch => {
    axios.post (
        '/api/products', productData
    ).then (res=> {
        getProducts()
        console.log(res.data)
        history.push("/")
    })
}


export const getProducts = () => dispatch => {
    axios.get (
        '/api/products'
    ).then (res=> {
        return dispatch ({
            type: GET_PRODUCTS,
            payload: res.data
        })
    })
}
