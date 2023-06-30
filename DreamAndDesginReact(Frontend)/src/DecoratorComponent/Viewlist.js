import React, {useState, useEffect} from "react";
import { useHistory } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.css';
import axios from "axios";
import List from './List';

const DecoViewlist = ()=>{
    
    const [posts, setPosts] = useState([]);
    const history = useHistory();


    useEffect(()=>{
        axios.get("decorator/viewadd")
        .then(resp=>{
            console.log(resp.data);
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
                    <th scope="col">All ADDS</th>
                    </tr>
                </thead>
                </table>
                
                {
                    posts.map(post=>(
                        <List id={post.id} add_name={post.add_name} add_type={post.add_type} add_price={post.add_price} key={post.id}></List>
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
export default DecoViewlist;