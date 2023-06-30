import React, {useState, userEffect} from "react";
import { useHistory } from "react-router-dom";
import axios from "axios";

const DecoSignup = () => {
    let[UserName, setUserName] = useState("");
    let[Name, setName] = useState("");
    let[Password, setPassword] = useState("");
    let[Phone, setPhone] = useState("");
    let[Email, setEmail] = useState("");
    let[Address, setAddress] = useState("");
    let[Yoe, setYoe] = useState("");
    const history = useHistory();

    const signupSubmit= ()=>{
        var obj = {username: UserName, name:Name , password: Password, phone:Phone , emial:Email , address:Address , yoe:Yoe };
        axios.post("decorator/signup",obj)
        .then(resp=>{
            alert("Sing up successful");
            let path = "/"; 
            history.push(path);
            
        }).catch(err=>{
            console.log(err);
        });

    }

    return(
        
        <div>
            <form>
                <h3>Sign Up</h3>

                <div className="form-group">
                    <label>UserName</label>
                    <input type="text" className="form-control" onChange={(e)=>setUserName(e.target.value)} placeholder="UserName" />
                </div>

                <div className="form-group">
                    <label>Your Name</label>
                    <input type="text" className="form-control" onChange={(e)=>setName(e.target.value)} placeholder="Your Name" />
                </div>

                <div className="form-group">
                    <label>Password</label>
                    <input type="password" className="form-control" onChange={(e)=>setPassword(e.target.value)} placeholder="Password" />
                </div>

                <div className="form-group">
                    <label>Phone</label>
                    <input type="text" className="form-control" onChange={(e)=>setPhone(e.target.value)} placeholder="Phone" />
                </div>

                <div className="form-group">
                    <label>Email</label>
                    <input type="text" className="form-control" onChange={(e)=>setEmail(e.target.value)} placeholder="Email" />
                </div>

                <div className="form-group">
                    <label>Address</label>
                    <input type="text" className="form-control" onChange={(e)=>setAddress(e.target.value)} placeholder="Address" />
                </div>

                <div className="form-group">
                    <label>Years of Experience</label>
                    <input type="text" className="form-control" onChange={(e)=>setYoe(e.target.value)} placeholder="Years of Experience" />
                </div>

                
            </form>
            <button onClick={signupSubmit} className="btn btn-primary btn-block">Sign Up</button>
                <p className="forgot-password text-right">
                    Already registered <a href="/Login">sign in?</a>
                </p>
        </div>

    );
}
export default DecoSignup;