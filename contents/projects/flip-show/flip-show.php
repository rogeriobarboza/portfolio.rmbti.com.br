<?php

    //require  "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/configs/env/urls.php";

$img_1 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_1.jpg";
$img_2 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_2.jpg";
$img_3 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_3.jpg";
$img_4 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_4.jpg";
$img_5 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_5.jpg";
$img_6 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_6.jpg";
$img_7 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_7.jpg";
$img_8 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_8.jpg";
$img_9 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_9.jpg";
$img_10 = "http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/imgs/img_10.jpg";
?>

    
<link rel="stylesheet" href="http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/flip-show.css">
<script src="http://localhost/projetos-portfolio/portfolio.rmbti.com.br/contents/projects/flip-show/flip-show.js" defer></script>
    

<!-- divisão semântica corpo-->
<div class="masterContainer">
    <div class="divTxt">
        <h1>Flip Page</h1>
        <p>Apresentação de imagens com animação "flip" em HTML, CSS e Javascript puro.</p>
    </div>
    
    
    <div class="mainContainer">
    
        <div class="flipContainer" id="flipContainer">
        <!-- -->
    
            <div class="L"></div>
    
            <div class="R">
    
                <!-- Flip -->
                <div class="flip" id="flip-1">
    
                        <div class="image-L">
                            <div class="next">
                                <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                            </div>
                            <img loading="eager" class="img-l" id="img0" src="<?php echo $img_1 ?>" alt="">
                        </div>
    
                        <div class="image-R">
                            <div class="back">
                                <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                            </div>
                            <img loading="eager" class="img-r" id="img1" src="<?php echo $img_2 ?>" alt="">
                        </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-2">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="<?php echo $img_3 ?>" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="<?php echo $img_4 ?>" alt="">
                    </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-3">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="<?php echo $img_5 ?>" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="<?php echo $img_6 ?>" alt="">
                    </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-4">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="<?php echo $img_7 ?>" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="<?php echo $img_8 ?>" alt="">
                    </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-5">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="<?php echo $img_9 ?>" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="<?php echo $img_10 ?>" alt="">
                    </div>
    
                </div>
    
    
            </div>
            <!-- -->
    
        </div>
    
    </div> <!-- Fim Main Container -->
</div>
