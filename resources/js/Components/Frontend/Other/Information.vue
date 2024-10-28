<script>
import webPC from '/images/Information/webPC.png';
import webPhone from '/images/Information/webPhone.png';
import angleDown from '/images/Information/angle-down.svg';

export default {
    props: {
        response: Object,
    },
    data() {
        return {
            images: {
                webPC, webPhone, angleDown,
            },
            Num:  this.$page.props.response.rt_data.input ?? '',
            ClickNum: 1,
            screenWidth: false,
        }
    },
    mounted() {
        this.checkScreenWidth();
        window.addEventListener('resize', this.checkScreenWidth);
    },
    methods: {
        toggle() {
            if (this.ClickNum == 1) {
                return this.ClickNum = 2;
            } else {
                return this.ClickNum = 1;
            }
        },
        checkScreenWidth() {
            this.screenWidth = window.innerWidth >= 500;
        },
    }
}
</script>

<template>
    <div class="w-[100%] mb-[5vh] flex justify-center">
        <div class="main w-[67%]">
            <div class="title"><img :src="screenWidth ? images.webPC : images.webPhone" alt="" class=" m-auto 2md:m-0">
            </div>
            <div :class="ClickNum == 1 ? 'all-2' : 'all'">
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 1">隱私權聲明<img
                        class="w-[3vw] mt-1.5 ml-1 " :src="images.angleDown" alt=""></button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 2">智慧財產權聲明<img
                        class="w-[3vw] mt-1.5 ml-1 " :src="images.angleDown" alt=""></button>
                <button @click="toggle()" class="OptionClick" type="button" v-if="Num == 3">網站導覽<img
                        class="w-[3vw] mt-1.5 ml-1 " :src="images.angleDown" alt=""></button>
                <div :class="ClickNum == 2 ? 'SelectionOptionClick' : 'SelectionOption'">
                    <button @click="Num = 1, ClickNum = 1" class="OptionBtn" type="button">隱私權聲明</button>
                    <button @click="Num = 2, ClickNum = 1" class="OptionBtn" type="button">智慧財產權聲明</button>
                    <button @click="Num = 3, ClickNum = 1" class="OptionBtn" type="button">網站導覽</button>
                </div>
            </div>
            <div class="SelectionBar w-[100%]">
                <button @click="Num = 1" :class="Num == 1 ? 'ClickColor' : 'SelectionBtn'" type="button">隱私權聲明</button>
                <button @click="Num = 2" :class="Num == 2 ? 'ClickColor' : 'SelectionBtn'" type="button">智慧財產權聲明</button>
                <button @click="Num = 3" :class="Num == 3 ? 'ClickColor' : 'SelectionBtn'" type="button">網站導覽</button>
            </div>
            <div v-if="Num == 1" class="w-[100%]">
                <div class="content">
                    <span
                        class="h2">親愛的朋友，感謝您蒞臨國立中興大學創新產業暨國際學院網站(以下簡稱本網站)，關於您的個人隱私權，本網站絕對尊重並予以保護。為了讓您能夠更安心的使用本網站所提供之各項服務，特於此向您說明本網站的隱私權保護政策。</span>
                </div>
                <div class="content">
                    <span class="h1">一、本聲明適用範圍</span><br>
                    <span class="h2">本聲明適用於所有以國立中興大學名義申請之網域(Domain
                        Name即www.nchu.edu.tw)所架設之網站，如secret.nchu.edu.tw、www.oaa.nchu.edu.tw、www.osa.nchu.edu.tw、cc.nchu.edu.tw等均適用本聲明，但不適用於本網站功能連結之各政府機關網站或其他對外連結，您必須參考該連結網站中的隱私權保護政策，本網站不負任何連帶責任。</span>
                </div>
                <div class="content">
                    <span class="h1">二、關於個人資料之蒐集</span><br>
                    <span
                        class="h2">當您在瀏覽本網站或下載檔案時，並不會蒐集任何有關您的個人身份資料。而本網站提供之各項線上服務，將視服務需求請您提供姓名、身分證字號、聯絡電話、e-mail、通訊住址等個人最新、最真實之資料。本網站所蒐集之個人資料，將在國立中興大學所提供的業務範圍內或依法得為交互運用之規範下進行，除法律另有規定外，不會將其做為超出蒐集之特定目的以外之用途。此外，本網站在您使用服務信箱或其他互動性功能時，會保留您所提供的姓名、身分證字號、電子郵件地址、連絡方式及使用時間等。當您在瀏覽或查詢網頁資料時，本網站亦會保留伺服器自行產生的相關紀錄，包括您使用連線設備的IP位址、使用時間、瀏覽及點擊資料等紀錄，這些資料將提供本網站內部進行網路流量和行為的調查分析，以利於提升本網站的服務品質，並不會針對個別使用者進行資料對應或分析。本網站有義務保護您的隱私，在未取得您的同意下，不會任意修改或刪除任何您的個人資料及檔案。除非經過您同意或符合以下情況始得為之：<br>
                        1.經由合法的途徑。<br>
                        2.保護或防衛相關網路民眾的權利或所有權。<br>
                        3.為保護本網站各相關單位之權益。<br>
                        本網站絕不會任意出售、交換、或出租任何您的個人資料給其他團體、個人或私人企業。而下列情形者除外：<br>
                        1.配合司法單位合法的調查。<br>
                        2.依法配合相關權責機關依職務需要之調查或使用。<br>
                        3.符合相關法令與規範之安全保護要求下，進行網站服務維護管理及系統調整等作業。</span>
                </div>
                <div class="content">
                    <span class="h1">三、網站安全機制</span><br>
                    <span
                        class="h2">本網站將盡力建置完善之安全保護措施，運用軟硬體設備建置網路安全機制，網站主機不定期進行弱點掃描與系統漏洞修補。本網站亦裝置網路記錄分析系統，偵測網路異常紀錄與資訊，對於破壞性行為或企圖侵入伺服主機之異常行為，將依相關安全規範進行攔阻，並通報警政單位。</span>
                </div>
                <div class="content">
                    <span class="h1">四、個人資料的利用及傳輸</span><br>
                    <span
                        class="h2">本網站有權於特定目的或法令許可範圍內，對取得之個人資料進行保管、利用、處理或傳輸，期間自該項服務啟始日起，至服務停止後六個月為止，利用地區為臺灣地區。本網站將盡力以合理之技術及程序，維護所有個人資料之安全。</span>
                </div>
                <div class="content">
                    <span class="h1">五、Cookies的運用與政策</span><br>
                    <span
                        class="h2">本網站使用Cookies作為與您溝通與辨識的工具，目的在於提供您更好的服務，以及方便您參與個人化的互動活動。此外，為了統計瀏覽人數及分析瀏覽模式，做為本網站改善服務之參考，會在您瀏覽器中寫入並讀取Cookies
                        。如果您不希望接受Cookies，您可以在瀏覽器之設定選項中(如IE
                        之「Internet選項」的「安全性」)修改您對Cookies的接受程度。如果您選擇拒絕所有的Cookies，可能會導致您無法使用本網站服務，或參與部分的活動。</span>
                </div>
                <div class="content">
                    <span class="h1">六、自我保護措施</span><br>
                    <span
                        class="h2">請妥善保管您的個人資料、帳號、憑證及密碼等相關資料，勿將其提供給第三者，尤其是密碼；在您使用本網站所提供之各項服務功能後，請務必登出帳號。若您是與他人共享電腦或使用公共電腦，使用完畢切記要關閉瀏覽器視窗，以防止他人讀取您的資料。</span>
                </div>
                <div class="content">
                    <span class="h1">七、當事人之權利</span><br>
                    <span class="h2">(一)本網站依循「個人資料保護法」及相關法令要求，提供當事人針對其個人資料行使以下權利：<br>
                        1.請求查詢或閱覽。<br>
                        2.製給複製本。<br>
                        3.請求補充或更正。<br>
                        4.請求停止蒐集、處理及利用。<br>
                        5.請求刪除。<br>
                        (二)若您欲行使上述當事人之權利時，請填寫「個人資料使用資訊服務申請表」(若各單位有可供當事人行使上述五項權利事項之申請表單，可不使用「個人資料使用資訊服務申請表」)，並交給相關受理該業務之單位。<br>
                        (三)本校受理上述(一)當事人權利之行使時，如依法令不得提供或進行者，本校得拒絕之。<br>
                        (四)而您可以自由選擇是否提供您的個人資料，但若您不提供或所提供之個人資料，經檢舉或由本校發現不足以確認您的身分、有冒用、盜用其他個人資料或資料不實等情形，您將損失參與相關業務活動之權益。</span>
                </div>
                <div class="content">
                    <span class="h1">八、其他</span><br>
                    <span
                        class="h2">本網站將因應社會環境及法令規定之變遷或科技技術進步，不定時修訂與公布本項政策聲明，並採用最新技術與法規盡力保護您的網路隱私，請您隨時上網閱覽本政策，以保障您的權益。</span>
                </div>
            </div>
            <div v-if="Num == 2" class="w-[100%]">
                <div class="content">
                    <span
                        class="h2">1234親愛的朋友，感謝您蒞臨國立中興大學創新產業暨國際學院網站(以下簡稱本網站)，關於您的個人隱私權，本網站絕對尊重並予以保護。為了讓您能夠更安心的使用本網站所提供之各項服務，特於此向您說明本網站的隱私權保護政策。</span>
                </div>
                <div class="content">
                    <span class="h1">一、本聲明適用範圍</span><br>
                    <span class="h2">本聲明適用於所有以國立中興大學名義申請之網域(Domain
                        Name即www.nchu.edu.tw)所架設之網站，如secret.nchu.edu.tw、www.oaa.nchu.edu.tw、www.osa.nchu.edu.tw、cc.nchu.edu.tw等均適用本聲明，但不適用於本網站功能連結之各政府機關網站或其他對外連結，您必須參考該連結網站中的隱私權保護政策，本網站不負任何連帶責任。</span>
                </div>
                <div class="content">
                    <span class="h1">二、關於個人資料之蒐集</span><br>
                    <span
                        class="h2">當您在瀏覽本網站或下載檔案時，並不會蒐集任何有關您的個人身份資料。而本網站提供之各項線上服務，將視服務需求請您提供姓名、身分證字號、聯絡電話、e-mail、通訊住址等個人最新、最真實之資料。本網站所蒐集之個人資料，將在國立中興大學所提供的業務範圍內或依法得為交互運用之規範下進行，除法律另有規定外，不會將其做為超出蒐集之特定目的以外之用途。此外，本網站在您使用服務信箱或其他互動性功能時，會保留您所提供的姓名、身分證字號、電子郵件地址、連絡方式及使用時間等。當您在瀏覽或查詢網頁資料時，本網站亦會保留伺服器自行產生的相關紀錄，包括您使用連線設備的IP位址、使用時間、瀏覽及點擊資料等紀錄，這些資料將提供本網站內部進行網路流量和行為的調查分析，以利於提升本網站的服務品質，並不會針對個別使用者進行資料對應或分析。本網站有義務保護您的隱私，在未取得您的同意下，不會任意修改或刪除任何您的個人資料及檔案。除非經過您同意或符合以下情況始得為之：<br>
                        1.經由合法的途徑。<br>
                        2.保護或防衛相關網路民眾的權利或所有權。<br>
                        3.為保護本網站各相關單位之權益。<br>
                        本網站絕不會任意出售、交換、或出租任何您的個人資料給其他團體、個人或私人企業。而下列情形者除外：<br>
                        1.配合司法單位合法的調查。<br>
                        2.依法配合相關權責機關依職務需要之調查或使用。<br>
                        3.符合相關法令與規範之安全保護要求下，進行網站服務維護管理及系統調整等作業。</span>
                </div>
                <div class="content">
                    <span class="h1">三、網站安全機制</span><br>
                    <span
                        class="h2">本網站將盡力建置完善之安全保護措施，運用軟硬體設備建置網路安全機制，網站主機不定期進行弱點掃描與系統漏洞修補。本網站亦裝置網路記錄分析系統，偵測網路異常紀錄與資訊，對於破壞性行為或企圖侵入伺服主機之異常行為，將依相關安全規範進行攔阻，並通報警政單位。</span>
                </div>
                <div class="content">
                    <span class="h1">四、個人資料的利用及傳輸</span><br>
                    <span
                        class="h2">本網站有權於特定目的或法令許可範圍內，對取得之個人資料進行保管、利用、處理或傳輸，期間自該項服務啟始日起，至服務停止後六個月為止，利用地區為臺灣地區。本網站將盡力以合理之技術及程序，維護所有個人資料之安全。</span>
                </div>
                <div class="content">
                    <span class="h1">五、Cookies的運用與政策</span><br>
                    <span
                        class="h2">本網站使用Cookies作為與您溝通與辨識的工具，目的在於提供您更好的服務，以及方便您參與個人化的互動活動。此外，為了統計瀏覽人數及分析瀏覽模式，做為本網站改善服務之參考，會在您瀏覽器中寫入並讀取Cookies
                        。如果您不希望接受Cookies，您可以在瀏覽器之設定選項中(如IE
                        之「Internet選項」的「安全性」)修改您對Cookies的接受程度。如果您選擇拒絕所有的Cookies，可能會導致您無法使用本網站服務，或參與部分的活動。</span>
                </div>
                <div class="content">
                    <span class="h1">六、自我保護措施</span><br>
                    <span
                        class="h2">請妥善保管您的個人資料、帳號、憑證及密碼等相關資料，勿將其提供給第三者，尤其是密碼；在您使用本網站所提供之各項服務功能後，請務必登出帳號。若您是與他人共享電腦或使用公共電腦，使用完畢切記要關閉瀏覽器視窗，以防止他人讀取您的資料。</span>
                </div>
                <div class="content">
                    <span class="h1">七、當事人之權利</span><br>
                    <span class="h2">(一)本網站依循「個人資料保護法」及相關法令要求，提供當事人針對其個人資料行使以下權利：<br>
                        1.請求查詢或閱覽。<br>
                        2.製給複製本。<br>
                        3.請求補充或更正。<br>
                        4.請求停止蒐集、處理及利用。<br>
                        5.請求刪除。<br>
                        (二)若您欲行使上述當事人之權利時，請填寫「個人資料使用資訊服務申請表」(若各單位有可供當事人行使上述五項權利事項之申請表單，可不使用「個人資料使用資訊服務申請表」)，並交給相關受理該業務之單位。<br>
                        (三)本校受理上述(一)當事人權利之行使時，如依法令不得提供或進行者，本校得拒絕之。<br>
                        (四)而您可以自由選擇是否提供您的個人資料，但若您不提供或所提供之個人資料，經檢舉或由本校發現不足以確認您的身分、有冒用、盜用其他個人資料或資料不實等情形，您將損失參與相關業務活動之權益。</span>
                </div>
                <div class="content">
                    <span class="h1">八、其他</span><br>
                    <span
                        class="h2">本網站將因應社會環境及法令規定之變遷或科技技術進步，不定時修訂與公布本項政策聲明，並採用最新技術與法規盡力保護您的網路隱私，請您隨時上網閱覽本政策，以保障您的權益。</span>
                </div>
            </div>
            <div v-if="Num == 3" class="w-[100%] flex justify-between Guide">
                <div>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h1">主頁導覽列</span>
                        <li>LOGO</li>
                        <li>認識我們</li>
                        <li>課程分類</li>
                        <li>最新課程</li>
                        <li>最新消息</li>
                        <li>聯絡我們</li>
                    </ul>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h1">漢堡條</span>
                        <li>關於我們
                            <ul class="list-disc list-inside -indent-0">
                                <li>單位介紹</li>
                                <li>成員介紹</li>
                                <li>相關法規</li>
                                <li>表單下載</li>
                                <li>成果展示</li>
                            </ul>
                        </li>
                        <li>課程資訊
                            <ul class="list-disc list-inside -indent-0">
                                <li>全部課程</li>
                                <li>最新課程</li>
                                <li>兒童營隊</li>
                                <li>單元手作</li>
                                <li>運動課程</li>
                                <li>職業訓練</li>
                                <li>專業證照</li>
                            </ul>
                        </li>
                        <li>消息資訊
                            <ul class="list-disc list-inside -indent-0">
                                <li>本週消息</li>
                                <li>本月消息</li>
                                <li>半年內消息</li>
                                <li>所有消息</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h3">關於我們</span>
                        <li>單位介紹</li>
                        <li>成員介紹</li>
                        <li>相關法規</li>
                        <li>表格下載</li>
                        <li>成果紀錄</li>
                    </ul>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h3">課程資訊</span>
                        <li>所有課程</li>
                        <li>最新課程</li>
                        <li>兒童營隊</li>
                        <li>單元手作</li>
                        <li>運動課程</li>
                        <li>職業訓練</li>
                        <li>專業證照</li>
                    </ul>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h3">消息資訊</span>
                        <li>本週消息</li>
                        <li>本月消息</li>
                        <li>半年內消息</li>
                        <li>所有消息</li>
                    </ul>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h3">網站資訊</span>
                        <li>隱私權聲明</li>
                        <li>智慧財產權聲明</li>
                        <li>網站地圖</li>
                    </ul>
                </div>
                <div>
                    <ul class="list-disc list-inside content -indent-[2vw] UlPadding">
                        <span class="h3">尾頁</span>
                        <li>最新消息</li>
                        <li>單位介紹</li>
                        <li>成員介紹</li>
                        <li>相關法規</li>
                        <li>表單下載</li>
                        <li>成果展示</li>
                        <li>兒童營隊</li>
                        <li>單元手作</li>
                        <li>運動課程</li>
                        <li>職業訓練</li>
                        <li>專業護照</li>
                        <li>Facebook</li>
                        <li>隱私權聲明</li>
                        <li>智慧財產權聲明</li>
                        <li>網站導覽</li>
                        <li>後臺管理</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
} */
.title {
    @apply mt-[20px] md:mt-[60px] md:mb-[20px] 2md:w-[185px] md:w-[315px];
}

.all {
    max-height: 12.4vh;
    overflow: hidden;
    animation-name: up;
    animation-duration: 0.5s;
    animation-timing-function: linear;
    animation-fill-mode: forwards;
}

.all-2 {
    max-height: 12.4vh;
    overflow: hidden;
}

@keyframes up {
    from {
        max-height: 12.4vh;
    }

    to {
        max-height: 30vh;
    }
}



.SelectionBar {
    border-bottom: 2px solid black;
}

.SelectionBtn {
    padding: 0.48vw 1.46vw;
    border-radius: 1.04vw 1.04vw 0px 0px;
    font-size: 1.04vw;
    font-family: inter;
    background-color: transparent;
    margin-right: 1vw;
}

.ClickColor {
    padding: 0.48vw 1.46vw;
    border-radius: 20px 20px 0px 0px;
    font-size: 1.04vw;
    font-family: inter;
    color: white;
    background-color: rgb(0, 87, 255);
    margin-right: 1vw;
}

.SelectionBtn:hover {
    background-color: rgb(210, 210, 210);
}


.OptionBtn {
    text-align: center;
    background-color: rgb(0, 87, 255);
    color: white;
    padding: 1.5vw 0px;
    border-bottom: 0.2vw solid rgba(255, 255, 255, 0.35);
    font-size: 2.8vw;
}

.OptionClick {
    width: 100%;
    border-bottom: 1px black solid;
    display: none;
}



.h1 {
    font-size: 1.35vw;
    color: rgb(0, 87, 255);
    font-weight: 900;
}

.h2 {
    font-size: 1.146vw;
}

.h3 {
    font-size: 1.35vw;
    color: rgb(0, 87, 255);
    font-weight: 900;
}

li {
    font-size: 1.146vw;
}

.content {
    margin-top: 2.604vw;
    padding: 0px 1.04vw;
    font-family: Noto Sans TC;
}

.UlPadding {
    padding: 0px 2.6vw;
}

.SelectionOptionClick {
    display: flex;
    flex-direction: column;
    font-size: 2.8vw;
}

.SelectionOption {
    display: none;
}

@media(max-width:768px) {
    .SelectionBtn {
        border-radius: 1.56vw 1.56vw 0px 0px;
        font-size: 1.56vw;
    }

    .ClickColor {
        border-radius: 1.56vw 1.56vw 0px 0px;
        font-size: 1.56vw;
    }
}

@media (max-width:500px) {

    .SelectionBar {
        display: none;
    }

    .title {
        font-size: 5.2vw;
        text-align: center;
        margin-bottom: 2.5vw;
    }

    .h1 {
        font-size: 3.2vw;
    }

    .h2 {
        font-size: 2.8vw;
    }

    .h3 {
        font-size: 4vw;
    }

    li {
        font-size: 3.2vw;
        margin-left: 5vw;
    }

    .OptionClick {
        display: inline-flex;
        justify-content: center;
        font-size: 3.2vw;
    }

    .Guide {
        flex-direction: column;
    }
}
</style>

