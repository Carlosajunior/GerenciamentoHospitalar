var token = sessionStorage.getItem('token');
var auth = {
  headers: {
    Authorization: `Bearer ${token}`,
    Accept: "application/json"
  },
};

export default auth;