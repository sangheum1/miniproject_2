function chkDuplicationId() {
    const id = document.getElementById('id'); // 화면상에서 값 적은것 체크하는부분
    const url = "/api/user?id="+id.value;
    let apiData = null;

    // API
    fetch(url)
    .then(data => {return data.json();} )
    .then(apiData => {
        const idspan = document.getElementById('errMsgId');
        if(apiData["flg"] === "1") {
            idspan.innerHTML = apiData["msg"];
        } else {
            idspan.innerHTML = "";
        }
    });
    ;

    // fetch(url)
    // .then(data => {
    //     // Response Status 확인 (200번 외에는 에러 처리)
    //     if(data.status !== 200) {
    //         throw new Error(data.status + ' : API Response Error' );
    //     }
    //     return data.json();
    // })
    // .then(apiData => {
    //     const idspan = document.getElementById('errMsgId');
    //     if(apiData["flg"] === "1") {
    //         idspan.innerHTML = apiData["msg"];
    //     } else {
    //         idspan.innerHTML = "";
    //     }
    // })
    // // 에러는 alert로 처리
    // .catch(error => alert(error.message));
}