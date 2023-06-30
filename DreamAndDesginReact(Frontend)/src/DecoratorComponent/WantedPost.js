import React from "react";
import 'bootstrap/dist/css/bootstrap.css';

const DecoWantedPost = (props) => {
    return(
        
        <div>
            <table class="table table-hover">
            
            <tbody>
                <tr>
                <th scope="row"><b>Post ID:</b> {props.wp_id}</th>
                <td><b>Type:</b> {props.wp_type}</td>
                <td><b>Budget:</b> {props.wp_budget}</td>
                <td><b>Description:</b> {props.wp_description}</td>
                <td><b>Posted By:</b> {props.wp_posted_by}</td>
                </tr>
            </tbody>
            </table>
        </div>

    );
}
export default DecoWantedPost;