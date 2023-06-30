import React from "react";
import {Link} from "react-router-dom";


const DecoHead = () => {
    if(localStorage.getItem('user')){
        return(
        
            <div>
                
                <Link to="/">Home  </Link>
                <Link to="/Viewadd">View Adds  </Link>
                <Link to="/ViewOrderList">ViewOrderList  </Link>
                <Link to="/ViewWantedPost">ViewWantedPost  </Link>
                <Link to="/PostAdd">PostAdd  </Link>
                <Link to="/Logout">Logout  </Link>
            </div>
        );
      }
    return(
        
        <div>
            




            <Link to="/">Home</Link>
            <Link to="/Login">Login</Link>
            <Link to="/DecoSignup">DecoSignup</Link>
        </div>
    );
}   
export default DecoHead;

