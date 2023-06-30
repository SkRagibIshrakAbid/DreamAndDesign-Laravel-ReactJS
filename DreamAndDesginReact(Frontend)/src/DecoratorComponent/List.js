import React from "react";
import axios from "axios";
import 'bootstrap/dist/css/bootstrap.css';
import { useHistory } from "react-router-dom";

const DecoList = (props) => {
    var id = props.id;
    const history = useHistory();

    const edit= ()=>{
        var obj = {aid: id};
        axios.post("decorator/edit",obj)
        .then(resp=>{
            var adddetails = resp.data;
            var add = {addid: adddetails.id ,addname: adddetails.add_name ,addtype: adddetails.add_type ,adddesc: adddetails.add_desc ,addprice: adddetails.add_price };
            localStorage.setItem('add',JSON.stringify(add));
            let path = "/EditAdd"; 
            history.push(path);
        }).catch(err=>{
            console.log(err);
            console.log(obj);
        });


    }
    const deleteadd= ()=>{
        var obj = {aid: id};
        axios.post("decorator/deletepost",obj)
        .then(resp=>{
            window.location.reload(false);
            alert("Deleted");
            
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        
        <div>
            <table class="table table-hover">
            
            <tbody>
                <tr>
                <th scope="row"><b>Add ID:</b> {props.id}</th>
                <td><b>Name:</b> {props.add_name}</td>
                <td><b>Type:</b> {props.add_type}</td>
                <td><b>Price:</b> {props.add_price}</td>
                <td><button onClick={edit}  className="btn btn-primary btn-block">Edit</button></td>
                <td><button onClick={deleteadd}  className="btn btn-primary btn-block">Delete</button></td>
                </tr>
            </tbody>
            </table>
        </div>

    );
}
export default DecoList;