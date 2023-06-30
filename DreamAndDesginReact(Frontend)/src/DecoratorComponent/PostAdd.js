import React, {useState, userEffect} from "react";
import { useHistory } from "react-router-dom";
import axios from "axios";

const DecoPostAdd = () => {
    let[UserName, setUserName] = useState("");
    let[Name, setName] = useState("");
    let[Password, setPassword] = useState("");
    let[Phone, setPhone] = useState("");
    let[Email, setEmail] = useState("");
    const history = useHistory();

    const postSubmit= ()=>{
        var obj = JSON.parse(localStorage.getItem('user'));
        
        var obj = {Name: UserName, Type:Name , Price: Password, Description:Phone , Image:Email, userdid: obj.userId};
        axios.post("decorator/postadd",obj)
        .then(resp=>{
            
            alert("Posted");
            
            let path = "/Viewadd"; 
            history.push(path);
            
        }).catch(err=>{
            console.log(err);
            console.log(obj);
        });

    }

    return(
        
        <div>
            <form>
                <h3>Post Add</h3>

                <form>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name of the add*" onChange={(e)=>setUserName(e.target.value)} />
                            </div>
                            <div class="form-group">
                            <label>Type</label>
                                <input type="text" class="form-control" placeholder="Type of the add*" onChange={(e)=>setName(e.target.value)} />
                            </div>
                            <div class="form-group">
                            <label>Price</label>
                                <input type="text" class="form-control" placeholder="Price *" onChange={(e)=>setPassword(e.target.value)} />
                            </div>
                        </div>








                        <div class="col-md-6">
                            
                            <div class="form-group">
                            <label>Description</label>
                                <input type="text" class="form-control" placeholder="Description *" onChange={(e)=>setPhone(e.target.value)} />
                            </div>
                            <div class="form-group">
                            <label>Image</label>
                                <input type="file" class="form-control" onChange={(e)=>setEmail(e.target.value)}/>
                            </div>
                        </div>
                    </div>
                </div>
</form>

                
            </form>
            <button onClick={postSubmit} className="btn btn-primary btn-block">Post</button>
        </div>

    );
}
export default DecoPostAdd;





