import { Box, TextField, Button, Alert } from '@mui/material';
import { useState } from 'react';
import { getToken } from '../../services/LocalStorageService';
import { useChangeUserPasswordMutation } from '../../services/userAuthApi';
import { useSelector } from 'react-redux';

const ChangePassword = () => {
  const [error, setError] = useState({
    status: false,
    msg: "",
    type: ""
  });
  const [changeUserPassword] = useChangeUserPasswordMutation()
  const token = getToken()

  const handleSubmit = async (event) => {
    event.preventDefault();
    const data = new FormData(event.currentTarget);
    const actualData = {
      old_password: data.get('old_password'),
      password: data.get('password'),
      password_confirmation: data.get('password_confirmation'),
    }
    
    if (actualData.old_password && actualData.password && actualData.password_confirmation) {
      if (actualData.password === actualData.password_confirmation) {
        try {
          const res = await changeUserPassword({ actualData, token })
          console.log('API Response:', res)
          
          // Check if there's an error in the response
          if (res.error) {
            // Handle API errors (400, 500, etc.)
            const errorMessage = res.error.data?.message || 'Something went wrong';
            setError({ status: true, msg: errorMessage, type: "error" });
          } else if (res.data?.status === "success") {
            // Handle success
            document.getElementById("password-change-form").reset();
            setError({ status: true, msg: "Password Changed Successfully", type: "success" });
          } else {
            // Handle unexpected response format
            setError({ status: true, msg: "Unexpected response from server", type: "error" });
          }
        } catch (error) {
          console.error('Request failed:', error);
          setError({ status: true, msg: "Network error. Please try again.", type: "error" });
        }
      } else {
        setError({ status: true, msg: "Password and Confirm Password Doesn't Match", type: "error" })
      }
    } else {
      setError({ status: true, msg: "All Fields are Required", type: "error" })
    }
  };

  // Getting User Data from Redux Store
  const myData = useSelector(state => state.user)
  console.log("Change Password", myData)

  return <>
    <Box sx={{ display: 'flex', flexDirection: 'column', flexWrap: 'wrap', maxWidth: 600, mx: 4 }}>
      <h1>Change Password</h1>
      <Box component="form" onSubmit={handleSubmit} noValidate sx={{ mt: 1 }} id="password-change-form">
        <TextField margin="normal" required fullWidth name="old_password" label="Current Password" type="password" id="old_password" />
        <TextField margin="normal" required fullWidth name="password" label="New Password" type="password" id="password" />
        <TextField margin="normal" required fullWidth name="password_confirmation" label="Confirm New Password" type="password" id="password_confirmation" />
        <Box textAlign='center'>
          <Button type="submit" variant="contained" sx={{ mt: 3, mb: 2, px: 5 }}> Update </Button>
        </Box>
        {error.status ? <Alert severity={error.type}>{error.msg}</Alert> : ""}
      </Box>
    </Box>
  </>;
};

export default ChangePassword;