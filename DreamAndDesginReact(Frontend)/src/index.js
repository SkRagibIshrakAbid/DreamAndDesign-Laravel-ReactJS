import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import reportWebVitals from './reportWebVitals';
import {BrowserRouter as Router, Route, Switch} from 'react-router-dom';
import DecoHead from './DecoratorComponent/Head';
import DecoApp from './DecoratorComponent/Testnav';
import DecoHome from './DecoratorComponent/Home';
import DecoViewlist from './DecoratorComponent/Viewlist';
import DecoViewOrderList from './DecoratorComponent/ViewOrderList';
import DecoViewWantedPost from './DecoratorComponent/ViewWantedPost';
import DecoLogin from './DecoratorComponent/Login';
import DecoDecoSignup from './DecoratorComponent/DecoSignup';
import DecoPostAdd from './DecoratorComponent/PostAdd';
import DecoLogout from './DecoratorComponent/Logout';
import DecoEditAdd from './DecoratorComponent/EditAdd';
import axios from 'axios';

//

var token = null;
if(localStorage.getItem('user')){
  var obj = JSON.parse(localStorage.getItem('user'));
  token = obj.access_token;
}

axios.defaults.baseURL="http://127.0.0.1:8000/api/";
axios.defaults.headers.common["Authorization"] = token;

ReactDOM.render(
  <React.StrictMode>
    <Router>
      <DecoApp/>
      <DecoHead/>
      <DecoHead/>
      <Switch>
        <Route exact path="/">
          <DecoHome/>
        </Route>
        <Route exact path="/Viewadd">
          <DecoViewlist/>
        </Route>
        <Route exact path="/Login">
          <DecoLogin/>
        </Route>
        <Route exact path="/ViewOrderList">
          <DecoViewOrderList/>
        </Route>
        <Route exact path="/ViewWantedPost">
          <DecoViewWantedPost/>
        </Route>
        <Route exact path="/Signup">
          <DecoDecoSignup/>
        </Route>
        <Route exact path="/PostAdd">
          <DecoPostAdd/>
        </Route>
        <Route exact path="/EditAdd">
          <DecoEditAdd/>
        </Route>
        <Route exact path="/Logout">
          <DecoLogout/>
        </Route>
        
      </Switch>
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
