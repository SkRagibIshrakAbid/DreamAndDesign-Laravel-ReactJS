import React from "react";
import '../assets/css/style.css';
import '../assets/vendor/bootstrap/css/bootstrap.min.css';
import '../assets/vendor/bootstrap-icons/bootstrap-icons.css';
import '../assets/vendor/boxicons/css/boxicons.min.css';
import '../assets/vendor/glightbox/css/glightbox.min.css';
import '../assets/vendor/swiper/swiper-bundle.min.css';


//about
import logo7 from '../assets/img/1.jpg';
const DecoHome = () => {
    
    return(
        <div>
        <section id="about" className="about">
    <div className="container">
      <div className="row">
        <div className="col-lg-6">
          <img src={logo7} className="img-fluid" alt="" />
        </div>
        <div className="col-lg-6 pt-4 pt-lg-0">
          <h3>Welcome To Dream And Design</h3>
          <p>
            
          </p>
          <div className="row">
            
          </div>
        </div>
      </div>
    </div>
  </section>
        </div>
    );
}
export default DecoHome;