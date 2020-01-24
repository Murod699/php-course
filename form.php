<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <form action="backend.php" method="POST">
            <div>
                <label for="">
                    Ismi
                    <input type="text" name="ismi">
                </label>
            </div>
            <div>
                <label for="">
                    Familyasi
                    <input type="text" name="familyasi">
                </label>
            </div>
            <div>
                <label for="">
                    Sharifi
                    <input type="text" name="sharifi">
                </label>
            </div>
            <div>
                <label for="">
                    Matn
                    <textarea name="matn" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div>
                <label for="">
                    Test uchun savol?
                    <input type="radio" name="variant" value="a"> A) Savol javobi 1
                    <input type="radio" name="variant" value="b"> B) Savol javobi 2
                    <input type="radio" name="variant" value="c"> C) Savol javobi 3
                </label>
            </div>
            <div>
                <label for="">
                    <input type="checkbox" name="check_school" value="85"> Maktabni bitirganmisiz?
                </label>
            </div>
            <button type="submit">Yuborish</button>
        </form>
    </body>
</html>