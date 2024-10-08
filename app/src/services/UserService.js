import useAuth from '../stores/useAuth'
import settings from '../settings.json'

import { toast } from 'vue3-toastify'
import 'vue3-toastify/dist/index.css'

class UserService {
  async fetchAll() {
    try {
      const URL_API = settings.environments.prod.api.uri
      const uri = `${URL_API}/admin/profiles`
      const rawResponse = await fetch(uri, {
        method: 'GET'
      })
      const response = await rawResponse.json()
      return response
    } catch (error) {
      console.log(error)
    }
  }

  async fetchById(id) {
    try {
      const URL_API = settings.environments.prod.api.uri
      const uri = `${URL_API}/admin/${id}`
      const rawResponse = await fetch(uri, {
        method: 'GET',
        headers: {
          'Content-Type': 'Application/json',
        }
      })
      const response = await rawResponse.json()
      return response
    } catch (error) {
      console.log(error)
    }
  }

  async add() {
    try {
      const store = useAuth()
      const TOKEN = store.token
      const URL_API = store.baseURL

      const uri = `${URL_API}/productos/create`
      const rawResponse = await fetch(uri, {
        method: 'GET',
        headers: {
          'Content-Type': 'Application/json',
          Accept: 'Application/json',
          Authorization: `Bearer ${TOKEN}`
        }
      })
      const { data } = await rawResponse.json()
      return data
    } catch (error) {
      console.log(error)
    }
  }

  async editState(user_id, state) {
    try {
      const URL_API = settings.environments.dev.api.uri
      const uri = `${URL_API}/admin/${user_id}`
      const rawResponse = await fetch(uri, {
        method: 'PUT',
        headers: {
          'Content-Type': 'Application/json'
        },
        body: JSON.stringify({
          estado: !state
        })
      })
      const { data } = await rawResponse.json()
      return data
    } catch (error) {
      toast.error('Ocurrio un error: ' + error, {
        autoClose: 2500
      })
    }
  }

  async deleteUserById(user_id) {
    try {
      const URL_API = settings.environments.dev.api.uri
      const uri = `${URL_API}/admin/${user_id}`
      const rawResponse = await fetch(uri, {
        method: 'DELETE',
        headers: {
          'Content-Type': 'Application/json'
        }
      })
      const { data } = await rawResponse.json()
      return data
    } catch (error) {
      toast.error('Ocurrio un error: ' + error, {
        autoClose: 2500
      })
    }
  }
}
export default UserService
