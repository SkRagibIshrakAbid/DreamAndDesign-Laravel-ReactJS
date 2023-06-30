import React, {useState, userEffect} from "react";
import { useHistory } from "react-router-dom";
import axios from "axios";

const DecoLogin = ()=>{
    let[token, setToken]= useState("");
    let[name, setName] = useState("");
    let[password, setPassword] =useState("");
    const history = useHistory();

    const loginSubmit= ()=>{
        var obj = {username: name, password: password};
        axios.post("decorator/login",obj)
        .then(resp=>{
            alert("Login successful");
            
            var token = resp.data;
            console.log(token);
            var user = {userId: token.userid, access_token:token.token};
            localStorage.setItem('user',JSON.stringify(user));
            let path = "/"; 
            history.push(path);
            
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        <div>
            <form>
                <div className="form-group">
                    <label>Username</label>
                    <input type="text" className="form-control" value={name} onChange={(e)=>setName(e.target.value)}></input>

                </div>
                <div className="form-group">
                    <label>Password</label>
                    <input type="password" className="form-control" value={password} onChange={(e)=>setPassword(e.target.value)}></input>

                </div>

            </form>
                <button onClick={loginSubmit} className="btn btn-primary btn-block">Login</button>
        </div>

    )
}
export default DecoLogin; 