import React, {useState, userEffect} from "react";
import { useHistory } from "react-router-dom";
import axios from "axios";

const DecoEditAdd = () => {
    let[UserName, setUserName] = useState("");
    let[Name, setName] = useState("");
    let[Password, setPassword] = useState("");
    let[Phone, setPhone] = useState("");
    let[Email, setEmail] = useState("");
    const history = useHistory();
    var addold = JSON.parse(localStorage.getItem('add'));
    console.log(addold);
   


    const postSubmit= ()=>{
        var obj = JSON.parse(localStorage.getItem('user'));
        
        var obj = {Name: UserName, Type:Name , Price: Password, Description:Phone, userdid: obj.userId, adddid: addold.addid};
        axios.post("decorator/editpost",obj)
        .then(resp=>{
            
            alert("Edited");
            
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
                <h3>Sign Up</h3>

                <form>
                <div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                            <label>Name</label>
                                <input type="text" class="form-control" defaultValue={addold.addname} onChange={(e)=>setUserName(e.target.value)} />
                            </div>
                            <div class="form-group">
                            <label>Type</label>
                                <input type="text" class="form-control" defaultValue={addold.addtype} onChange={(e)=>setName(e.target.value)} />
                            </div>
                            <div class="form-group">
                            <label>Price</label>
                                <input type="text" class="form-control" defaultValue={addold.addprice} onChange={(e)=>setPassword(e.target.value)} />
                            </div>
                        </div>








                        <div class="col-md-6">
                            
                            <div class="form-group">
                            <label>Description</label>
                                <input type="text" class="form-control" defaultValue={addold.adddesc} onChange={(e)=>setPhone(e.target.value)} />
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
export default DecoEditAdd;





