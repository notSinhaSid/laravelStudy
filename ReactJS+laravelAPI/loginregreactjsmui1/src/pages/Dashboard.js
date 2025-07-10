import { Button, CssBaseline, Grid, Typography } from '@mui/material';
import { useNavigate } from 'react-router-dom';
import ChangePassword from './auth/ChangePassword';
import { useLogoutUserMutation, useGetLoggedUserQuery } from '../services/userAuthApi';
import { getToken, removeToken } from '../services/LocalStorageService';
import { useEffect, useState } from 'react';
import { useDispatch } from 'react-redux';
import { setUserInfo, unsetUserInfo } from '../features/userSlice';
import { unsetUserToken } from '../features/authSlice';

const Dashboard = () => {
  const [userData, setUserData] = useState({
    email: "",
    name: ""
  })

  const navigate = useNavigate()
  const token = getToken()
  const [logoutUser] = useLogoutUserMutation()
  
  // Add isLoading and error handling
  const { data, isSuccess, isLoading, isError, error } = useGetLoggedUserQuery(token)
  
  // Enhanced logging 
  /*console.log('Token:', token)
  console.log('API Response:', data)
  console.log('Is Success:', isSuccess)
  console.log('Is Loading:', isLoading)
  console.log('Is Error:', isError)
  console.log('Error:', error)*/

  const handleLogout = async () => {
    const res = await logoutUser({ token })
    if (res.data.status === "success") {
      dispatch(unsetUserToken({ token: null }))
      dispatch(unsetUserInfo({ email: "", name: "" }))
      removeToken('token')
      navigate('/login')
    }
  }

  // Store User Data in Local State - with better checking
  useEffect(() => {
    if (data && isSuccess) {
      /*console.log('Setting user data:', data)*/
      // Check different possible data structures
      const user = data.user || data.users || data.data || data
      if (user && user.email && user.name) {
        setUserData({
          email: user.email,
          name: user.name,
        })
      }
    }
  }, [data, isSuccess])

  // Store User Data in Redux Store
  const dispatch = useDispatch()
  useEffect(() => {
    if (data && isSuccess) {
      const user = data.user || data.users || data.data || data
      if (user && user.email && user.name) {
        dispatch(setUserInfo({
          email: user.email,
          name: user.name,
        }))
      }
    }
  }, [data, isSuccess, dispatch])

  // loading state handling
  if (isLoading) {
    return (
      <CssBaseline>
        <Grid container>
          <Grid item sm={4} sx={{ backgroundColor: 'gray', p: 5, color: 'white' }}>
            <h1>Dashboard</h1>
            <Typography variant='h5'>Loading...</Typography>
          </Grid>
        </Grid>
      </CssBaseline>
    )
  }

  // error state handling
  if (isError) {
    return (
      <CssBaseline>
        <Grid container>
          <Grid item sm={4} sx={{ backgroundColor: 'gray', p: 5, color: 'white' }}>
            <h1>Dashboard</h1>
            <Typography variant='h5' color="error">
              Error loading user data: {error?.message || 'Unknown error'}
            </Typography>
            <Button variant='contained' color='warning' size='large' onClick={handleLogout} sx={{ mt: 8 }}>
              Logout
            </Button>
          </Grid>
        </Grid>
      </CssBaseline>
    )
  }

  return <>
    <CssBaseline />
    <Grid container>
      <Grid item sm={4} sx={{ backgroundColor: 'gray', p: 5, color: 'white' }}>
        <h1>Dashboard</h1>
        <Typography variant='h5'>Email: {userData.email || 'Loading...'}</Typography>
        <Typography variant='h6'>Name: {userData.name || 'Loading...'}</Typography>
        <Button variant='contained' color='warning' size='large' onClick={handleLogout} sx={{ mt: 8 }}>Logout</Button>
      </Grid>
      <Grid item sm={8}>
        <ChangePassword />
      </Grid>
    </Grid>
  </>;
};

export default Dashboard;