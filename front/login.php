<fieldset>
    <legend>會員登入</legend>
    <table>
        <tr>
            <td class='clo'>帳號</td>
            <td><input type="text" name="acc" id="acc"></td>
        </tr>
        <tr>
            <td class='clo'>密碼</td>
            <td><input type="password" name="pw" id="pw"></td>
        </tr>
        <tr>
            <td>
                <input type="button" value="登入" onclick="login()">
                <input type="reset" value="清除" onclick="clean()">
            </td>
            <td>
                <a href="?do=forget">忘記密碼</a> | <a href="?do=reg">尚未註冊</a>
            </td>
        </tr>
    </table>
</fieldset>
<script>
    /**
     * 登入函式
     */
    function login() {
        // 取得帳號輸入框的值
        let acc=$("#acc").val()
        // 取得密碼輸入框的值
        let pw=$("#pw").val()
        // 發送 POST 請求到 chk_acc.php 檢查帳號是否存在
        $.post('./api/chk_acc.php', {acc}, (res) => {
            // 如果回傳的結果為 0，表示查無帳號
            if (parseInt(res) == 0) {
                alert("查無帳號")
            } else {
                // 發送 POST 請求到 chk_pw.php 檢查帳號密碼是否正確
                $.post('./api/chk_pw.php', { acc,pw },(res) => {
                    // 如果回傳的結果為 1，表示密碼正確
                    if (parseInt(res) == 1) {
                        // 如果帳號為 'admin'，導向後台頁面
                        if ($("#acc").val() == 'admin') {
                            location.href = 'back.php'
                        } else {
                            // 否則導向首頁
                            location.href = 'index.php'
                        }
                    } else {
                        alert("密碼錯誤")
                    }
                })
            }
        })
    }
</script>