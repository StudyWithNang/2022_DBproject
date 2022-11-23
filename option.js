function changeLangSelect(){
    var langSelect = document.getElementById("selectbox");
    var langvalue= document.getElementById("getvalue");
    // select element에서 선택된 option의 value가 저장된다.
    var selectValue = langSelect.options[langSelect.selectedIndex].value;
    
    // select element에서 선택된 option의 text가 저장된다.
    var selectText = langSelect.options[langSelect.selectedIndex].text;
    langvalue.innerText = selectText;
    //document.write(langvalue.innerText);
    console.log(selectText);
}
