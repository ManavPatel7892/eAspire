<?php include('../layout/header.php'); ?>
<style>
    .services-img {
        width: 100%;
        height: 655px;
        object-fit: cover;
    }

    .our-serices {
        position: absolute;
        top: 519px;
        display: flex;
        align-items: center;
        height: 199px;
        font-size: 89px;
        color: #fff;
        left: 132px;
    }

    .services-text-line {
        position: absolute;
        top: 681px;
        left: 137px;
        border-top: 0.5px solid #fff;
        box-sizing: border-box;
        width: 477px;
    }

    .Services-name {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 88px;
    }

    .Skill-name {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 88px;
    }

    .Services-under-line {
        width: 9%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 689px;
        margin-bottom: 36px;
    }

    .Skill-under-line {
        width: 9%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 689px;
        margin-bottom: 36px;
    }

    .image-text-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .services-info {
        background: #ddebee;
    }

    .consulting {
        background-image: url('../public/assets/images/rectangle-8@2x.png');
        width: 100%;
        height: 491px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border: 3px solid;
        margin-bottom: 40px;
    }

    .business {
        background-image: url('../public/assets/images/rectangle-9@2x.png');
        width: 100%;
        height: 491px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border: 3px solid;
        margin-bottom: 40px;
    }

    .technology {
        background-image: url('../public/assets/images/rectangle-10@2x.png');
        width: 100%;
        height: 491px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border: 3px solid;
        margin-bottom: 40px;
    }

    .outsourcing {
        background-image: url('../public/assets/images/rectangle-11@2x.png');
        width: 100%;
        height: 491px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        border: 3px solid;
        margin-bottom: 40px;
    }

    .consulting-text {
        font-size: 35px;
        display: flex;
        justify-content: center;
        background-color: #19a2bf99;
        color: #fff;
        text-decoration: underline;
    }

    .business-text {
        font-size: 35px;
        display: flex;
        justify-content: center;
        background-color: #19a2bf99;
        color: #fff;
        text-decoration: underline;

    }

    .technology-text {
        font-size: 35px;
        display: flex;
        justify-content: center;
        background-color: #19a2bf99;
        color: #fff;
        text-decoration: underline;

    }

    .outsourcing-text-info {
        font-size: 35px;
        display: flex;
        justify-content: center;
        background-color: #19a2bf99;
        color: #fff;
        text-decoration: underline;
    }

    .outsourcing-text {
        font-size: 35px;
        background-color: #19a2bf99;
        color: #fff;
        height: 89%;
        text-align: center;
        line-height: 49px;
        margin-top: 0px;
        padding: 10px;
    }

    .enterprise-info {
        font-size: 18px;
        background-color: #19a2bf99;
        /* line-height: 109px; */
        /* margin-top: 0px; */
        color: #fff;
        height: 89%;
        text-align: center;
        line-height: 45px;
        margin-top: 0px;
        padding: 10px;
    }

    .application-info {
        font-size: 18px;
        background-color: #19a2bf99;
        /* line-height: 109px; */
        /* margin-top: 0px; */
        color: #fff;
        height: 89%;
        text-align: center;
        line-height: 45px;
        margin-top: 0px;
        padding: 10px;
    }

    .sales-info {
        font-size: 18px;
        background-color: #19a2bf99;
        /* line-height: 109px; */
        /* margin-top: 0px; */
        color: #fff;
        height: 89%;
        text-align: center;
        line-height: 49px;
        margin-top: 0px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .Landscape-info {
        font-size: 18px;
        background-color: #19a2bf99;
        color: #fff;
        height: 89%;
        text-align: center;
        line-height: 49px;
        margin-top: 0px;
        padding: 10px;
    }

    .image-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .image-info-data {
        padding-left: 40px;
        padding-right: 40px;
        padding-top: 45px;
    }

    .enterprisearch1 {
        height: 100px;
    }

    .Database-info {
        height: 100px;
    }

    .enterprisearch1-img {
        height: 100%;
    }

    .Database-info-img {
        height: 100%;
    }

    .all-text {
        font-size: 18px;
        color: #232323;
        font-weight: 500;
    }

    .architecture-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .Architecture {
        justify-content: center;
        /* align-items: center; */
    }

    .info-data {
        height: 100%;
    }

    .main-info {
        height: 128px;
        margin-top: 54px;
        border: 1px solid;
        border-radius: 25px;
        display: flex;
        box-shadow: 0 0 4px 5px rgba(25, 162, 191, 0.52);
        margin-bottom: 37px;
    }

    .text-border {
        font-size: 20px;
        color: #19a2bf;
        font-weight: 600;
    }

    .Architecture-text-info {
        align-items: center;
        display: flex;
        font-size: 20px;
        color: #19a2bf;
        font-weight: 500;
    }

    .enterprise-text {
        display: flex;
        align-items: center;
        margin-top: 47px;
        margin-left: -111px;
        font-size: 18px;
        color: #385566;
    }

    .team-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .team-name {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 88px;
    }

    .left-right-info {
        margin-top: 52px;
    }

    .left-info {
        background-color: #19a2bf;
        border-radius: 0 30px 30px 0;
        padding: 37px;
        margin-left: -47px;
    }

    .it-info {
        color: #fff;
        font-size: 25px;
        margin-left: 37px;
    }

    .management-info {
        color: #fff;
        font-size: 25px;
        margin-left: 37px;
    }

    .pubilc-img {
        width: 100%;
        position: absolute;
    }

    .right-info {
        background-color: #19a2bf;
        border-radius: 30px 0 0 30px;
        padding: 20px;
        margin-right: -40px;
    }

    .left-info2 {
        background-color: #19a2bf;
        border-radius: 0 30px 30px 0;
        padding: 37px;
        margin-left: -47px;
        margin-bottom: 30px;
        margin-top: 30px
    }

    .subject-info {
        color: #fff;
        font-size: 25px;
        margin-left: 37px;
    }

    .right-info2 {
        background-color: #19a2bf;
        border-radius: 30px 0 0 30px;
        padding: 37px;
        margin-right: -40px;
        margin-top: 30px;
    }

    .Management-info {
        color: #fff;
        font-size: 25px;
        margin-left: 37px;
    }

    .methodology-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .methodology-text {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
        display: flex;
        align-items: start;
        justify-content: start;
        padding-top: 88px;
    }

    .methodology-under-line {
        width: 30%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 5px;
        margin-bottom: 84px;
    }

    /* .these-text {
        border-bottom: 2px dashed;
        width: max-content;
        position: absolute;
        left: 328px;
    } */

    .group-info {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 190px;
    }

    .group-child {
        position: relative;
        /* top: -34px;
        left: 22px; */
        border-radius: 50%;
        background-color: #fff;
        border: 101px solid #19a2bf;
        box-sizing: border-box;
        width: 460px;
        height: 460px;
        /* margin-left: 518px; */
        /* margin-top: -38px; */
    }

    .evaluation-text {
        margin-top: -52px;
        color: #fff;
        font-size: 16px;
    }





    .group-img {
        position: relative;
        top: -100px;
        left: 65px;
        width: 106.46px;
        height: 109.88px;
        object-fit: contain;
    }

    .one-text {
        font-size: 26px;
        margin-left: 147px;
        margin-top: -171px;
        position: absolute;
        color: #385566;
        font-weight: 600;
    }

    .mapping-text {
        position: relative;
        left: 333px;
        top: -213px;
        /* border-bottom: 2px dashed; */
        width: max-content;
    }

    .one2 {
        position: absolute;
        left: 289px;
        font-size: 28px;
        top: -84px;
        width: 89%;
        border-bottom: 2px dashed #848684;
    }

    .processes-text {
        position: absolute;
        top: -47px;
        left: 212px;
        font-size: 13px;
        color: #fff;
        font-weight: 500;
    }

    .group5-img {
        position: absolute;
        top: 20px;
        left: 245px;
        width: 106.46px;
        height: 109.88px;
        object-fit: contain;
    }

    .two-text {
        font-size: 26px;
        margin-left: 131px;
        margin-top: -171px;
        position: absolute;
        left: 175px;
        color: #385566;
        font-weight: 600;
        top: 260px;
    }

    .optimize-text {
        position: absolute;
        left: 395px;
        top: 189px;
        /* border-bottom: 2px dashed; */
        width: max-content;
    }

    .two2 {
        position: absolute;
        left: 346px;
        font-size: 28px;
        top: 189px;
        border-bottom: 2px dashed #848684;
        width: 101%;
    }

    .suggestions-text {
        position: absolute;
        top: 201px;
        left: 236px;
        font-size: 11px;
        color: #fff;
        font-weight: 500;
    }

    .group2-img {
        position: absolute;
        top: 238px;
        left: 148px;
        width: 106.46px;
        height: 109.88px;
        object-fit: contain;
    }

    .three-text {
        font-size: 26px;
        margin-left: -14px;
        margin-top: 26px;
        position: absolute;
        left: 175px;
        color: #385566;
        font-weight: 600;
        top: 260px;
    }

    .three3 {
        position: absolute;
        left: 86px;
        font-size: 28px;
        top: 356px;
        border-left: 2px dashed #848684;
    }

    .choose-text {
        position: absolute;
        left: 86px;
        top: 386px;
        border-left: 2px dashed #848684;
        width: max-content;
    }

    .application-text {
        position: absolute;
        top: 259px;
        left: 3px;
        font-size: 13px;
        color: #fff;
        font-weight: 500;
    }

    .group3-img {
        position: absolute;
        top: 204px;
        left: -48px;
        width: 106.46px;
        height: 109.88px;
        object-fit: contain;
    }

    .four-text {
        font-size: 26px;
        margin-left: -210px;
        margin-top: -37px;
        position: absolute;
        left: 175px;
        color: #385566;
        font-weight: 600;
        top: 260px;
    }

    .four4 {
        position: absolute;
        left: -113px;
        font-size: 28px;
        top: 135px;
        border-bottom: 2px dashed #848684;
        width: max-content;

    }

    .weekly-text {
        position: absolute;
        left: -359px;
        top: 64px;
        border-bottom: 2px dashed #848684;
        width: max-content;
    }

    .construction-text {
        position: absolute;
        top: 80px;
        left: -97px;
        font-size: 13px;
        color: #fff;
        font-weight: 500;
    }

    .group4-img {
        position: absolute;
        top: 1px;
        left: -90px;
        width: 106.46px;
        height: 109.88px;
        object-fit: contain;
    }

    .five-text {
        font-size: 26px;
        margin-left: -193px;
        margin-top: -249px;
        position: absolute;
        left: 175px;
        color: #385566;
        font-weight: 600;
        top: 260px;
    }

    .these-text {
        position: absolute;
        left: -272px;
        top: -144px;
        border-bottom: 2px dashed #848684;
        width: max-content;
    }

    .five5 {
        position: absolute;
        left: 3px;
        font-size: 28px;
        top: -120px;
        border-bottom: 2px dashed #848684;
        width: max-content;

    }

    .under-border-round {
        height: 240px;
        width: 240px;
        border-radius: 50%;
        border: 1px solid #19a2bf;
        position: absolute;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 999;
        transform: translate(-50%, -50%);
    }

    .engagement-main-info {
        padding-left: 40px;
        padding-right: 40px;
    }



    .engagement-text {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
        display: flex;
        align-items: start;
        justify-content: start;
        padding-top: 88px;
        /* border-bottom: 2px dashed #848684; */
        width: max-content;
    }

    .one-img-main-info {
        border-radius: 50%;
        background-color: #19a2bf26;
        width: 302px;
        height: 302px;
        position: relative;
        margin-bottom: 255px;
        margin-top: 29px;

    }

    .border-one-img {
        border: 4px dashed #b4bcc2;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 12px;
        left: 10px;
    }

    .one-img-info {
        width: 78%;
        position: relative;
        left: 35px;
        height: 177px;
        top: 54px;
    }

    .fixed-info {
        font-size: 27px;
        justify-content: center;
        display: flex;
        color: #19a2bf;
        margin-top: 148px;
        font-weight: 500;
    }

    .your-text-info {
        line-height: 21px;
        color: #385566;
        text-align: justify;
        margin-top: 27px;
        font-size: 16px;
    }

    .engagement-under-line {
        width: 24%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 5px;
        margin-bottom: 50px;
    }

    .two-img-main-info {
        border-radius: 50%;
        background-color: #19a2bf26;
        width: 302px;
        height: 302px;
        position: relative;
        margin-bottom: 255px;
        margin-top: 29px;
    }

    .border-two-img {
        border: 4px dashed #b4bcc2;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 12px;
        left: 10px;
    }

    .two-img-info {
        width: 78%;
        position: relative;
        left: 35px;
        height: 177px;
        top: 54px;
    }

    .hourly-info {
        font-size: 27px;
        justify-content: center;
        display: flex;
        color: #19a2bf;
        margin-top: 148px;
        font-weight: 500;
    }

    .your-text2-info {
        line-height: 21px;
        color: #385566;
        text-align: justify;
        margin-top: 27px;
        font-size: 16px;
    }

    .three-img-main-info {
        border-radius: 50%;
        background-color: #19a2bf26;
        width: 302px;
        height: 302px;
        position: relative;
        margin-bottom: 255px;
        margin-top: 29px;
    }

    .border-three-img {
        border: 4px dashed #b4bcc2;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 12px;
        left: 10px;
    }

    .three-img-info {
        width: 78%;
        position: relative;
        left: 55px;
        height: 177px;
        top: 80px;
    }

    .tm-info {
        font-size: 27px;
        justify-content: center;
        display: flex;
        color: #19a2bf;
        margin-top: 148px;
        font-weight: 500;
    }

    .your-text3-info {
        line-height: 21px;
        color: #385566;
        text-align: justify;
        margin-top: 27px;
        font-size: 16px;
    }

    .four-img-main-info {
        border-radius: 50%;
        background-color: #19a2bf26;
        width: 302px;
        height: 302px;
        position: relative;
        margin-bottom: 255px;
        margin-top: 29px;
    }

    .border-four-img {
        border: 4px dashed #b4bcc2;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        position: absolute;
        top: 12px;
        left: 10px;
    }

    .four-img-info {
        width: 78%;
        position: relative;
        left: 35px;
        height: 177px;
        top: 54px;
    }

    .your-text4-info {
        line-height: 21px;
        color: #385566;
        text-align: justify;
        margin-top: 27px;
        font-size: 16px;
    }

    .partner-info {
        font-size: 27px;
        justify-content: center;
        display: flex;
        color: #19a2bf;
        margin-top: 148px;
        font-weight: 500;
    }

    .more-text {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        text-decoration: none;
        color: #19a2bf;
    }

    .more-text:hover {
        text-decoration: none;
        color: #19a2bf;
    }

    .more-left-under-line {
        width: 24%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 345px;
        margin-bottom: 39px;
        position: relative;
        top: -19px;
    }

    .more-right-under-line {
        width: 24%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 749px;
        margin-bottom: 39px;
        position: relative;
        top: -70px;
    }

    .managed-text {
        font-size: 34px;
        line-height: 24px;
        font-weight: 600;
        color: #19a2bf;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 88px;
    }

    .managed-under-line {
        width: 36%;
        border-bottom: 2px dashed #b4bcc2;
        padding: 5px;
        margin-left: 465px;
        margin-bottom: 50px;
    }

    .last-all-info {
        width: 100%;
    }

    .managed-main-info {
        padding-left: 40px;
        padding-right: 40px;
    }

    .last-info1 {

        background-color: #fff;
        box-shadow: 28px 0 38px -38px #000 inset;
        padding: 53px;
        height: 350px;
        margin-bottom: 90px;

    }

    .writing-img {
        width: 100%;
    }

    .contract-text {
        font-size: 20px;
        color: #19a2bf;
        display: flex;
        justify-content: center;
        margin-top: 75px;
    }

    .last-info2 {
        padding: 53px;
        background-color: #fff;
        box-shadow: 28px 0 38px -38px #000 inset;
        height: 350px;
    }

    .innovation-img {
        width: 100%;
    }

    .concept-text {
        font-size: 20px;
        color: #19a2bf;
        display: flex;
        justify-content: center;
        margin-top: 67px;
    }

    .last-info3 {
        padding: 45px;
        background-color: #fff;
        box-shadow: 28px 0 38px -38px #000 inset;
        height: 350px;
    }

    .work-img {
        width: 100%;
    }

    .work-text {
        font-size: 20px;
        color: #19a2bf;
        display: flex;
        justify-content: center;
        margin-top: 64px;
    }


    .last-info4 {
        padding: 39px;
        background-color: #fff;
        box-shadow: 28px 0 38px -38px #000 inset;
        height: 350px;
    }

    .people-img {
        width: 100%;
        opacity: 1;
        height: 74%;
    }

    .discuss-text {
        font-size: 20px;
        color: #19a2bf;
        display: flex;
        justify-content: center;
        /* margin-top: 69px; */
    }

    .last-info5 {
        padding: 53px;
        background-color: #fff;
        box-shadow: 28px 0 38px -38px #000 inset;
        height: 350px;
    }

    .clock-img {
        width: 100%;
    }

    .deadlines-text {
        font-size: 20px;
        color: #19a2bf;
        display: flex;
        justify-content: center;
        margin-top: 73px;
    }


    .last-info6 {
        padding: 53px;
        background-color: #fff;
        box-shadow: 28px 0 38px -38px #000 inset;
        height: 350px;
    }

    .motorbike-img {
        width: 100%;
    }

    .deliver-text {
        font-size: 20px;
        color: #19a2bf;
        display: flex;
        justify-content: center;
        margin-top: 77px;
    }

    #loader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #cabeb7;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }

    .spinner-main {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .spinner {
        margin-left: 3rem;
        margin-top: 1rem;
        border: 3px solid #f3f3f3;
        border-top: 3px solid #dd7411;
        border-radius: 50%;
        width: 100px;
        height: 100px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }




    @media only screen and (max-width: 1024px) {
        .Services-under-line {
            width: 13%;
            margin-left: 437px;
        }

        .Skill-under-line {
            width: 13%;
            margin-left: 442px;
        }

        .Management-info {
            font-size: 22px;
        }

        .right-info2 {
            padding: 17px;
        }

        .subject-info {
            font-size: 23px;
        }

        .left-info2 {
            padding: 20px;
        }

        .management-info {
            font-size: 19px;
        }

        .right-info {
            padding: 11px;
        }

        .pubilc-img {
            top: 50px;
        }

        .more-left-under-line {
            margin-left: 213px;
        }

        .more-right-under-line {
            margin-left: 495px;
        }

        /* .one-img-main-info {
            width: 222px;
            height: 267px;
        } */

        .your-text-info {
            /* text-align:; */
        }

        /* .two-img-main-info {
            width: 222px;
            height: 267px;
        }

        .three-img-main-info {
            width: 222px;
            height: 267px;
        }

        .four-img-main-info {
            width: 222px;
            height: 267px;
        } */

        .more-text {
            margin-top: 62px;
        }

        .methodology-under-line {
            width: 46%;
        }

        .last-info1 {
            margin-bottom: 0px;
            height: 235px;

        }

        .last-info6 {
            height: 285px;
        }

        .last-info5 {
            height: 235px;
        }

        .last-info4 {
            height: 241px;
        }

        .last-info3 {
            height: 235px;
        }

        .last-info2 {
            height: 235px;
        }
    }

    @media only screen and (max-width: 820px) {
        .Services-under-line {
            width: 16%;
            margin-left: 340px;
        }

        .consulting-text,
        .business-text,
        .technology-text,
        .outsourcing-text-info {
            font-size: 28px;
        }

        .Landscape-info,
        .sales-info,
        .enterprise-info,
        .application-info {
            height: 91%;
        }

        .sales-info {
            font-size: 13px;
        }

        .Skill-under-line {
            width: 16%;
            margin-left: 339px;
        }

        .enterprise-text {
            font-size: 13px;
        }

        .management-info {
            font-size: 18px;
        }

        .right-info {
            padding: 15px;
        }

        .left-info2 {
            padding: 25px;
        }

        .subject-info {
            font-size: 19px;
        }

        .right-info2 {
            padding: 25px;
        }

        .Management-info {
            font-size: 19px;
        }

        .pubilc-img {
            top: 63px;
        }

        .these-text {
            left: -237px;
            top: -137px;
            font-size: 13px;
        }

        .mapping-text {
            left: 284px;
            top: -242px;
            font-size: 14px;
        }

        .two2 {
            width: 232px;
            left: 295px;
            font-size: 28px;
            top: 277px;
        }

        .optimize-text {
            left: 335px;
            top: 272px;
            font-size: 14px;
        }

        .one2 {
            width: 204px;
            left: 252px;
            font-size: 28px;
            top: -112px;
        }

        .weekly-text {
            left: -266px;
            top: 253px;
            width: max-content;
            font-size: 13px;
        }

        .four4 {
            left: -50px;
            font-size: 28px;
            top: 308px;
            width: 109px;
        }

        .methodology-under-line {
            width: 60%;
        }

        .more-left-under-line {
            margin-left: 158px;
        }

        .more-right-under-line {
            margin-left: 393px;
        }

        .managed-under-line {
            width: 70%;
            margin-left: 114px;
        }

        .contract-text {
            margin-top: 0px;
            font-size: 26px;
        }

        .concept-text {
            font-size: 26px;
            margin-top: -16px;
        }

        .work-text {
            font-size: 26px;
            margin-top: -8px;
        }

        .discuss-text {
            font-size: 26px;
            margin-top: 78px;
        }

        .deadlines-text {
            font-size: 26px;
            margin-top: -8px;
        }

        .deliver-text {
            font-size: 26px;
            margin-top: -6px;

        }

        .last-info1 {
            height: 365px;
        }

        .last-info2 {
            height: 365px;
        }

        .last-info3 {
            height: 351px;
        }

        .last-info4 {
            height: 351px;
        }

        .last-info5 {
            height: 355px;
        }

        .last-info6 {
            height: 466px;
        }

        .engagement-under-line {
            width: 47%;
        }

    }

    @media only screen and (max-width: 768px) {

        .services-main .consulting-text,
        .services-main .business-text,
        .services-main .technology-text,
        .outsourcing-text-info {
            font-size: 24px;
        }

        .services-main.Landscape-info,
        .sales-info,
        .enterprise-info,
        .application-info {
            height: 92%;
        }

        .enterprise-info {
            font-size: 19px;
            line-height: 34px;
        }

        .Landscape-info {
            line-height: 32px;
        }

        .Skill-under-line {
            width: 19%;
            margin-left: 317px;
        }

        .enterprise-text {
            font-size: 12px;
        }

        .management-info {
            font-size: 15px;
        }

        .right-info {
            padding: 14px;
        }

        .it-info {
            font-size: 20px;
        }

        .left-info {
            padding: 34px;
        }

        .left-info2 {
            padding: 17px;
        }

        .right-info2 {
            padding: 16px;

        }

        .pubilc-img {
            top: 79px;
        }

        .two2 {
            left: 280px;
        }

        .optimize-text {
            left: 320px;
        }

        .methodology-under-line {
            width: 62%;
        }

        .managed-under-line {
            width: 75%;
            margin-left: 92px;
        }

        .more-left-under-line {
            margin-left: 132px;
        }

        .work-text {
            margin-top: 6px;
        }

        .concept-text {
            margin-top: -6px;
        }

        .last-info1 {
            margin-bottom: 0px;
            height: 335px;

        }

        .last-info4 {
            height: 351px;
        }

        .last-info2 {
            height: 335px;

        }

        .last-info3 {
            height: 352px;
        }

        .last-info5 {
            height: 335px;
        }

        .last-info6 {
            height: 335px;
            margin-bottom: 100px;
        }
    }

    @media only screen and (max-width: 767px) {
        .services-img {
            width: 100%;
            height: 361px;
        }

        .our-serices {
            position: absolute;
            top: 290px;
            height: 199px;
            font-size: 52px;
            left: 49px;
        }

        .services-text-line {
            position: absolute;
            top: 422px;
            left: 57px;
            width: 301px;
        }

        .Services-under-line {
            width: 30%;
            margin-left: 152px;
        }

        .Landscape-info,
        .sales-info,
        .enterprise-info,
        .application-info {
            height: 93%;
        }

        .Skill-under-line {
            width: 30%;
            margin-left: 150px;
        }

        .main-info {
            height: 74px;
        }

        .Architecture-text-info {
            display: flex;
            align-items: start;
            font-size: 18px;
        }

        .enterprise-text {
            font-size: 12px;
            margin-top: 26px;
            margin-left: -100px;

        }

        .management-info {
            font-size: 12px;
            margin-left: 8px;
        }

        .Management-info {
            font-size: 13px;
        }

        .all-info-image {
            flex-direction: column-reverse;
        }

        .right-info {
            margin-right: -294px;
            padding: 9px;
        }

        .left-info {
            padding: 9px;
        }

        .left-info {
            margin-right: -240px;
            margin-top: 20px;
        }

        .it-info {
            font-size: 14px;
            margin-left: 51px;
        }

        .pubilc-img {
            left: 113px;
        }

        .right-info2 {
            margin-top: 94px;
        }

        .left-info2 {
            margin-top: 152px;
            margin-right: -240px;
            padding: 9px;
        }

        .right-info2 {
            padding: 9px;
            margin-left: -267px;
        }

        .group-child {
            height: 368px;
        }

        .under-border-round {
            height: 155px;
            width: 158px;
        }

        .subject-info {
            font-size: 13px;
            margin-left: 68px;

        }

        .methodology-under-line {
            width: 97%;
        }

        .processes-text {
            left: 169px;
            top: -28px;
        }

        .group5-img {
            left: 169px;
        }

        .two-text {
            margin-left: 53px;
            margin-top: -171px;
        }

        .suggestions-text {
            top: 127px;
            left: 158px;
        }

        .group2-img {
            top: 136px;
            left: 107px;
        }

        .three-text {
            margin-left: -52px;
            margin-top: -72px;
        }

        .application-text {
            top: 174px;
        }

        .group3-img {
            top: 132px;
        }

        .four-text {
            margin-top: -108px;
        }

        .construction-text {
            left: -94px;
        }

        .group4-img {
            top: -14px;
            left: -91px;
        }

        .five-text {
            margin-left: -194px;
            margin-top: -263px;
        }

        .mapping-text {
            left: -56px;
            top: 213px;
        }

        .one2 {
            left: -84px;
            top: 337px;
        }

        .three3 {
            top: 515px;
            left: -85px;
            border-bottom: 2px dashed #848684;
            width: 289px;
            border-left: none;
        }

        .two2 {
            left: -86px;
            top: 400px;
        }

        .optimize-text {
            left: -54px;
            top: 402px;
        }

        .choose-text {
            left: -52px;
            top: 468px;
            border-left: none;
            width: max-content;
        }

        .group-info {
            margin-bottom: 550px;
        }

        .weekly-text {
            left: -53px;
            top: 583px;
            font-size: 16px;
        }

        .four4 {
            left: -85px;
            top: 661px;
            width: 109px;
        }

        .these-text {
            left: -54px;
            top: 733px;
            font-size: 16px;
        }

        .five5 {
            left: -89px;
            top: 763px;
            width: 36px;
        }

        .methodology-text {
            font-size: 28px;
        }

        .more-left-under-line {
            margin-left: 67px;
        }

        .more-right-under-line {
            margin-left: 201px;
        }

        .managed-text {
            font-size: 23px;
        }

        .managed-under-line {
            width: 99%;
            margin-left: 1px;
        }

        .last-info1 {
            /* margin-bottom: 39px; */
            height: 400px
        }

        .last-info2 {
            height: 400px;
        }

        .last-info3 {
            height: 400px;
        }

        .last-info4 {
            height: 400px;
        }

        .people-img {
            width: 100%;
        }

        .last-info5 {
            height: 400px;
        }

        .last-info6 {
            height: 400px;
        }

        .one-img-main-info {
            width: 100%;
        }

        .two-img-main-info {
            width: 100%;
        }

        .three-img-main-info {
            width: 100%;
        }

        .four-img-main-info {
            width: 100%;
        }

    }
</style>

<div class="services-main">
    <div class="services-header">
        <img class="services-img" alt="" src=" ../public/assets/images/services.png" />
        <img class="header-child-group" alt="" src=" ../public/assets/images/group-13@2x.png">
        <div class="our-serices">Our Services</div>
        <div class="services-text-line"></div>
    </div>

    <div class="services-info">
        <div class="Services-name">Services</div>
        <div class="Services-under-line"></div>
        <div class="image-text-info">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="consulting">
                        <div class="consulting-text ">Consulting</div>
                        <div class="Landscape-info">IT Landscape<br>
                            Strategy and Architecture<br>
                            Business Transformation<br>
                            Enterprise Processes<br>
                            Digital Transformation<br>
                            Change and Learning</div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="business">
                        <div class="business-text">Business</div>
                        <div class="sales-info">Sales force<br>
                            ERP/CRM<br>
                            Sap/Oracle/Microsoft,etc</div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="technology">
                        <div class="technology-text">Technology</div>
                        <div class="enterprise-info">Enterprise Application<br>
                            Enterprise Social<br>
                            Enterprise Mobility<br>
                            Enterprise BI<br>
                            Cloud
                            Maintenance<br>
                            Testing</div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="outsourcing">
                        <div class="outsourcing-text-info">Outsourcing</div>
                        <div class="application-info">Application Outsourcing<br>

                            Resource & Staffing</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="skill-info">

        <div class="Skill-name">Skill Sets</div>
        <div class="Skill-under-line"></div>

        <div class="image-info">
            <div class="row">
                <div class="col ">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/enterprisearch1@2x.png" />
                        </div>
                        <div class="Architecture-text mt-3">Architecture</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/microsoftdotneticon-1@2x.png" />
                        </div>
                        <div class="Microsoft-text mt-3">Microsoft.NET</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/5602732-1@2x.png" />
                        </div>
                        <div class="Web-text mt-3">Web</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/smartphone-1@2x.png" />
                        </div>
                        <div class="Mobile-text mt-3">Mobile</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/j2ee-1@2x.png" />
                        </div>
                        <div class="J2EE-text mt-3">J2EE</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/lamp-1@2x.png" />
                        </div>
                        <div class="lamp-text mt-3">LAMP</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/datachart@2x.png" />
                        </div>
                        <div class="Analytics-text mt-3">Analytics</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="enterprisearch1">
                            <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/bigdata-1@2x.png" />
                        </div>
                        <div class="BigData-text mt-3">BigData</div>
                    </div>
                </div>
            </div>


        </div>
        <div class="image-info-data">
            <div class="row">
                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/database-1@2x.png" />
                        </div>
                        <div class="Architecture-text mt-3">Architecture</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/shopping-1@2x.png" />
                        </div>
                        <div class="Microsoft-text mt-3">Microsoft.NET</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/designer-1@2x.png" />
                        </div>
                        <div class="Web-text mt-3">Web</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/project-management-1@2x.png" />
                        </div>
                        <div class="Mobile-text mt-3">Mobile</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/stockve1@2x.png" />
                        </div>
                        <div class="J2EE-text mt-3">J2EE</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/pngtreevector-1@2x.png" />
                        </div>
                        <div class="lamp-text mt-3">LAMP</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/imagesremovebgpreview-1@2x.png" />
                        </div>
                        <div class="Analytics-text mt-3">Analytics</div>
                    </div>
                </div>

                <div class="col">
                    <div class="text-center all-text">
                        <div class="Database-info">
                            <img class="Database-info-img" alt="" src=" ../public/assets/images/testing-img@2x.png" />
                        </div>
                        <div class="BigData-text mt-3">BigData</div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="architecture-info">
        <div class="row Architecture">
            <div class="col-8">
                <div class="main-info">
                    <img class="enterprisearch1-img" alt="" src=" ../public/assets/images/enterprisearch1@2x.png" />
                    <div class="Architecture-text-info">
                        Architecture </div>

                    <div class="enterprise-text">Enterprise Architect, Rational Software Architect</div>

                </div>
            </div>
        </div>
    </div>

    <div class="team-info">

        <div class="team-name">Team Strengths</div>

        <div class="left-right-info">
            <div class="row all-info-image">
                <div class="col-4">
                    <div class="left-info">
                        <div class="it-info">It Consultants</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="center-image">
                        <img class="pubilc-img" alt="" src=" ../public/assets/images/pubilc-img1@2x.png" />

                    </div>
                </div>
                <div class="col-4">
                    <div class="right-info">
                        <div class="management-info">Management ProfessionalsBusiness Operations Executives</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="left-info2 ">
                        <div class="subject-info">Subject Matter Experts</div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="center-image">
                        <!-- <img class="pubilc-img" alt="" src=" ../public/assets/images/pubilc-img1@2x.png" /> -->

                    </div>
                </div>
                <div class="col-4">
                    <div class="right-info2 ">
                        <div class="Management-info">Management Professionals</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="methodology-info">
        <div class="methodology-text">Methodology & Framework</div>
        <div class="methodology-under-line"></div>
        <div class="group-info">
            <div class="group-child">
                <div class="under-border-round"></div>
                <div class="evaluation-text">Evaluation and<br> Monitoring</div>
                <img class="group-img" alt="" src=" ../public/assets/images/group-1@2x.png" />
                <div class="one-text">1</div>
                <div class="one2">1</div>
                <div class="mapping-text">Mapping processes to <br>determine the starting <br>point and the “Actual State”</div>
                <div class="processes-text">Evaluation ofprocesses andcurrent structure</div>
                <img class="group5-img" alt="" src=" ../public/assets/images/group-5@2x.png" />
                <div class="two-text">2</div>
                <div class="two2">2</div>
                <div class="optimize-text">Optimize a process with a right <br>combination of technologies</div>
                <div class="suggestions-text">Suggestions for <br>improvement <br>and process <br>optimization</div>
                <img class="group2-img" alt="" src=" ../public/assets/images/group-2@2x.png" />
                <div class="three-text">3</div>
                <div class="three3">3</div>
                <div class="choose-text">We choose technologies and review <br>option with the client. the client is part<br> of the project from the very beginning <br>and feedback is VITAL</div>
                <div class="application-text">Application design<br> together<br>with the client</div>
                <img class="group3-img" alt="" src=" ../public/assets/images/group-3@2x.png" />
                <div class="four-text">4</div>
                <div class="four4">4</div>
                <div class="weekly-text">Weekly delivery of developments for<br> the end user to operate and request <br>for changes. it is IDEAL that the end <br>user is part of the process of <br>development and testing</div>
                <div class="construction-text">Application<br>constructionand <br>implementation</div>
                <img class="group4-img" alt="" src=" ../public/assets/images/group-4@2x.png" />
                <div class="five-text">5</div>
                <div class="five5">5</div>
                <div class="these-text">These determine KPIs, reports and other <br>metrics, per user,in order to monitor that<br> the process is working as agreed</div>
            </div>
        </div>
    </div>

    <div class="engagement-main-info">
        <div class="engagement-text">Engagement Practices</div>
        <div class="engagement-under-line"></div>
        <div class="four-img-info-main">
            <div class="row">
                <div class=" col-12 col-md-6 col-lg-3">
                    <div class="one-img-main-info">
                        <div class="border-one-img"></div>
                        <img class="one-img-info" alt="" src=" ../public/assets/images/group-12@2x.png" />
                        <div class="fixed-info">Fixed Cost Model</div>
                        <div class="your-text-info">If your company or you have a fixed set of IT Outsourcing and Business consulting requirements or ideas for developing new solutions or services, then the fixed cost model is best for you.</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="two-img-main-info">
                        <div class="border-two-img"></div>
                        <img class="two-img-info" alt="" src=" ../public/assets/images/group-11@2x.png" />
                        <div class="hourly-info">Hourly Model</div>
                        <div class="your-text2-info">If your company or you have a fixed set of IT Outsourcing and Business consulting requirements or ideas for developing new solutions or services, then the fixed cost model is best for you.</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="three-img-main-info">
                        <div class="border-three-img"></div>
                        <img class="three-img-info" alt="" src=" ../public/assets/images/group-10@2x.png" />
                        <div class="tm-info">T&M Model</div>
                        <div class="your-text3-info">You can also hire our dedicated staff. They will work only on your project. They will also receive a daily time record of their work. Even if you hire dedicated employees.</div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="four-img-main-info">
                        <div class="border-four-img"></div>
                        <img class="four-img-info" alt="" src=" ../public/assets/images/group-9@2x.png" />
                        <div class="partner-info">Partner With Us</div>
                        <div class="your-text4-info">You can also hire our dedicated staff. They will work only on your project. They will also receive a daily time record of their work. Even if you hire dedicated employees.</div>
                    </div>
                </div>
            </div>
        </div>
        <a href="" class="more-text">more</a>
        <div class="more-left-under-line"></div>
        <div class="more-right-under-line"></div>
    </div>

    <div class="managed-main-info">
        <div class="managed-text">Managed Offshore Development</div>
        <div class="managed-under-line"></div>
    </div>


    <div class="row last-all-info">
        <div class="col-12 col-md-6 col-lg-2">
            <div class="last-info1">
                <img class="writing-img" alt="" src=" ../public/assets/images/writing-1@2x.png" />
                <div class="contract-text">Contract</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <div class="last-info2">
                <img class="innovation-img" alt="" src=" ../public/assets/images/innovation-1@2x.png" />
                <div class="concept-text">Concept</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <div class="last-info3">
                <img class="work-img" alt="" src=" ../public/assets/images/work-1@2x.png" />
                <div class="work-text">Working Hours</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <div class="last-info4">
                <img class="people-img" alt="" src=" ../public/assets/images/people-1@2x.png" />
                <div class="discuss-text">Discuss/ Interact</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <div class="last-info5">
                <img class="clock-img" alt="" src=" ../public/assets/images/clock-1@2x.png" />
                <div class="deadlines-text">Deadlines</div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-2">
            <div class="last-info6">
                <img class="motorbike-img" alt="" src=" ../public/assets/images/motorbike-1@2x.png" />
                <div class="deliver-text">Deliver</div>
            </div>
        </div>
    </div>
    <div id="loader">
        <div class="spinner-main">
            <div class="spinner"></div>
        </div>
    </div>
</div>




<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("loader").style.display = "flex";
    });
    window.onload = function() {
        document.getElementById("loader").style.display = "none";
    };
</script>

<?php include('../layout/footer.php'); ?>