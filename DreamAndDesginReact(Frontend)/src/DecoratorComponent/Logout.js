import React, {useState, userEffect} from "react";
import { Redirect, Route } from "react-router";
import axios from "axios";

const DecoLogout = ()=>{
    
    //localStorage.clear();


    if (localStorage.getItem('user')){
        axios.post("decorator/logout")
        .then(resp=>{
            localStorage.clear();
            
            
        }).catch(err=>{
            console.log(err);
        });
        return <Redirect to="/" />;
    } 
        


    
}
export default DecoLogout; 