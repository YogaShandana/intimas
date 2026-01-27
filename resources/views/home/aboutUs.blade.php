<section class="content-home-1">
    <div class="container">
        <div class="content-wrapper">
            <h2 class="title" data-aos="fade-down" data-aos-duration="800">
                About Us
            </h2>
            
            <p class="description" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                PT Intimas Surya is a seafood processing company committed to delivering high quality products to both local and international markets. 
                We maintain strict standards of hygiene, safety, and production to ensure every product meets the best quality.
            </p>
            
            <div class="cta-wrapper" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <a href="#" class="btn-primary">
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.content-home-1 {
    background: #2a3891;
    padding: 120px 0;
    position: relative;
    overflow: hidden;
}

.content-home-1::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 50%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
    pointer-events: none;
}

.content-home-1 .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 1;
}

.content-home-1 .content-wrapper {
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
}

.content-home-1 .title {
    font-family: 'Poppins', sans-serif;
    font-size: 48px;
    font-weight: 600;
    color: #ffffff;
    margin-bottom: 30px;
    letter-spacing: -0.5px;
    line-height: 1.2;
}

.content-home-1 .description {
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: rgba(255, 255, 255, 0.95);
    line-height: 1.8;
    margin-bottom: 40px;
    max-width: 800px;
    margin-left: auto;
    margin-right: auto;
}

.content-home-1 .cta-wrapper {
    margin-top: 40px;
}

.content-home-1 .btn-primary {
    display: inline-block;
    padding: 14px 50px;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
    font-weight: 400;
    color: #ffffff;
    background: transparent;
    border: 2px solid #ffffff;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.content-home-1 .btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.1);
    transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    z-index: -1;
}

.content-home-1 .btn-primary:hover::before {
    left: 0;
}

.content-home-1 .btn-primary:hover {
    background: rgba(255, 255, 255, 0.15);
    border-color: #ffffff;
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
}

.content-home-1 .btn-primary:active {
    transform: translateY(0);
}

/* Responsive Design */
@media (max-width: 768px) {
    .content-home-1 {
        padding: 80px 0;
    }
    
    .content-home-1 .title {
        font-size: 36px;
    }
    
    .content-home-1 .description {
        font-size: 15px;
        line-height: 1.7;
    }
    
    .content-home-1 .btn-primary {
        padding: 12px 40px;
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .content-home-1 {
        padding: 60px 0;
    }
    
    .content-home-1 .title {
        font-size: 28px;
    }
    
    .content-home-1 .description {
        font-size: 14px;
    }
}
</style>
