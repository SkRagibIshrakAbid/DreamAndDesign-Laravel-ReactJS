import React, {useState, useEffect} from "react";
import { useHistory } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.css';
import axios from "axios";
import OrderList from './OrderList';

const DecoViewOrderList = ()=>{
    let[did, setId] = useState("");
    const [posts, setPosts] = useState([]);
    const history = useHistory();


    useEffect(()=>{
        var obj = JSON.parse(localStorage.getItem('user'));
        var dobj = {userdid: obj.userId, };
        
        axios.post("decorator/vieworder",dobj)
        .then(resp=>{
            console.log(resp.data);
            console.log(obj);
            console.log(dobj);
            setPosts(resp.data);
        }).catch(err=>{
            console.log(err);
        });
    },[]);

    if(localStorage.getItem('user')){
        return(
            <div>
                
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">Order List</th>
                    </tr>
                </thead>
                </table>
                
                {
                    posts.map(post=>(
                        <OrderList o_id={post.o_id} o_name={post.o_name} o_type={post.o_type} o_price={post.o_price} o_posted_byname={post.o_posted_byname} key={post.o_id}></OrderList>
                    ))
                }
    
    
            </div>
        )
    }
    else{
        let path = "/"; 
        history.push(path);
    }

    

}
export default DecoViewOrderList;