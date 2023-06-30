import React from "react";
import {Link} from "react-router-dom";
import '../assets/css/style.css';
import '../assets/vendor/bootstrap/css/bootstrap.min.css';
import '../assets/vendor/bootstrap-icons/bootstrap-icons.css';
import '../assets/vendor/boxicons/css/boxicons.min.css';
import '../assets/vendor/glightbox/css/glightbox.min.css';
import '../assets/vendor/swiper/swiper-bundle.min.css';

const DecoHead = () => {
    if(localStorage.getItem('user')){
        return(
        
            <div>
        <header id="header" className="fixed-top header-transparent">
        <div className="container d-flex align-items-center justify-content-between">
            <h1 className="logo"><a href="index.html">Dream And Design</a></h1>

            <nav id="navbar" className="navbar">
            <ul>
                <li><a className="nav-link scrollto active" href="/">Home</a></li>
                <li><a className="nav-link scrollto" href="/Viewadd">View Adds</a></li>
                <li><a className="nav-link scrollto" href="/ViewOrderList">ViewOrderList</a></li>
                <li><a className="nav-link scrollto" href="/ViewWantedPost">ViewWantedPost</a></li>
                <li><a className="nav-link scrollto" href="/PostAdd">PostAdd</a></li>
                <li><a className="nav-link scrollto" href="/Logout">Logout</a></li>
                
            </ul>
            <i className="bi bi-list mobile-nav-toggle" />
            </nav>
        </div>
        </header>


</div>
        );
      }
    return(
        
        <div>
        <header id="header" className="fixed-top header-transparent">
  <div className="container d-flex align-items-center justify-content-between">
    <h1 className="logo"><a href="index.html">Dream And Design</a></h1>

    <nav id="navbar" className="navbar">
      <ul>
        <li><a className="nav-link scrollto active" href="/">Home</a></li>
        <li><a className="nav-link scrollto" href="/Login">Login</a></li>
        <li className="dropdown"><a href="#"><span>Sign Up</span> <i className="bi bi-chevron-down" /></a>
          <ul>
            <li><a href="/Signup">As Decorator</a></li>
            <li><a href="#">As House Owner</a></li>
            <li><a href="#">Apply for Moderator</a></li>
          </ul>
        </li>
      </ul>
      <i className="bi bi-list mobile-nav-toggle" />
    </nav>
  </div>
</header>


</div>
    );
}   
export default DecoHead;

