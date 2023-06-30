import React, {useState, useEffect} from "react";
import { useHistory } from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.css';
import axios from "axios";
import WantedPost from './WantedPost';

const DecoViewWantedPost = ()=>{
    
    const [posts, setPosts] = useState([]);
    const history = useHistory();


    useEffect(()=>{
        axios.get("decorator/viewwantedpost")
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
                    <th scope="col">Wanted Posts</th>
                    </tr>
                </thead>
                </table>
                
                {
                    posts.map(post=>(
                        <WantedPost wp_id={post.wp_id} wp_type={post.wp_type} wp_budget={post.wp_budget} wp_description={post.wp_description} wp_posted_by={post.wp_posted_by} key={post.wp_id}></WantedPost>
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
export default DecoViewWantedPost;