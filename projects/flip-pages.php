
<?php 
$img_1 = "imgs/img_1.jpg";
?>

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
                            <img loading="eager" class="img-l" id="img0" src="<?php echo $img_1; ?>" alt="">
                        </div>
    
                        <div class="image-R">
                            <div class="back">
                                <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                            </div>
                            <img loading="eager" class="img-r" id="img1" src="imgs/img_2.jpg" alt="">
                        </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-2">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="imgs/img_3.jpg" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="imgs/img_4.jpg" alt="">
                    </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-3">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="imgs/img_5.jpg" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="imgs/img_6.jpg" alt="">
                    </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-4">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="imgs/img_7.jpg" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="imgs/img_8.jpg" alt="">
                    </div>
    
                </div>
    
                <!-- Flip -->
                <div class="flip" id="flip-5">
    
                    <div class="image-L">
                        <div class="next">
                            <label for="rNext" class="lBtn" onclick="nextBtn()">Next</label>
                        </div>
                        <img loading="eager" class="img-l" src="imgs/img_9.jpg" alt="">
                    </div>
    
                    <div class="image-R">
                        <div class="back">
                            <label for="rBack" class="lBtn" onclick="backBtn()">Back</label>
                        </div>
                        <img loading="eager" class="img-r" src="imgs/img_10.jpg" alt="">
                    </div>
    
                </div>
    
    
            </div>
            <!-- -->
    
        </div>
    
    </div> <!-- Fim Main Container -->
</div>
