var token = sessionStorage.getItem('token');
var auth = {
  headers: {
    Authorization: `Bearer ${token}`,
  },
};

export default auth;