import React from "react";
import axios from "axios";
import 'bootstrap/dist/css/bootstrap.css';

const DecoOrderList = (props) => {
    var id = props.o_id;
    const acceptO= ()=>{
        var obj = {oid: id};
        axios.post("decorator/accept",obj)
        .then(resp=>{
            window.location.reload(false);
            alert("Approved");
            
        }).catch(err=>{
            console.log(err);
            console.log(obj);
        });


    }
    const rejectO= ()=>{
        var obj = {oid: id};
        axios.post("decorator/reject",obj)
        .then(resp=>{
            window.location.reload(false);
            alert("Rejected");
            
        }).catch(err=>{
            console.log(err);
        });


    }
    return(
        
        <div>
            <table class="table table-hover">
            
            <tbody>
                <tr>
                <th scope="row"><b>ID:</b> {props.o_id}</th>
                <td><b>Name:</b> {props.o_name}</td>
                <td><b>Type:</b> {props.o_type}</td>
                <td><b>Price:</b> {props.o_price}</td>
                <td><b>Ordered By:</b> {props.o_posted_byname}</td>
                <td><button onClick={acceptO}  className="btn btn-primary btn-block">Accept</button></td>
                <td><button onClick={rejectO}  className="btn btn-primary btn-block">Reject</button></td>

                </tr>
            </tbody>
            </table>
        </div>

    );
}
export default DecoOrderList;