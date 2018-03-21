<table>
    <tr>
        <td>First Number</td>
        <td><input id="firstNumber" type="number"></td>
    </tr>
    <tr>
        <td>Last Number</td>
        <td><input id="lastNumber" type="number"></td>
    </tr>
    <tr>
        <td>Result</td>
        <td><input id="result" type="number"></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="button" value="+" onclick="plusCal('+');">
            <input type="button" value="-" onclick="plusCal('-');">
            <input type="button" value="*" onclick="plusCal('*');">
            <input type="button" value="/" onclick="plusCal('/');">    
            <input type="button" value="%" onclick="plusCal('%');">


        </td>
    </tr>
</table>
<script>

    function plusCal(operator) {
        var firstNumber = Number(document.getElementById('firstNumber').value);
        var lastNumber = Number(document.getElementById('lastNumber').value);

        switch (operator) {
            case'+':
                var result = firstNumber + lastNumber;
                alert('Its a Adding Function');

                break;
            case'-':
                var result = firstNumber - lastNumber;
                alert('Its a Submition Function');
                break;
            case'*':
                var result = firstNumber * lastNumber;
                alert('Its a Multification Function');
                break;
            case'/':
                var result = firstNumber / lastNumber;
                alert('Its a Divided Function');
                break;
            case'%':
                var result = firstNumber % lastNumber;
                alert('Its a Modulas Function');
                break;
        }
        document.getElementById('result').value = result;
    }

//   function plusCal(){
//       var firstNumber = Number(document.getElementById('firstNumber').value);
//       var lastNumber = Number(document.getElementById('lastNumber').value);
//       var result = firstNumber+lastNumber;
//       document.getElementById('result').value=result;
//       alert('Its a Adding Function');
//   }
//   function subCal(){
//       var firstNumber = Number(document.getElementById('firstNumber').value);
//       var lastNumber = Number(document.getElementById('lastNumber').value);
//       var result = firstNumber-lastNumber;
//       document.getElementById('result').value=result;
//        alert('Its a Submition Function');
//   }
//   function mulCal(){
//       var firstNumber = Number(document.getElementById('firstNumber').value);
//       var lastNumber = Number(document.getElementById('lastNumber').value);
//       var result = firstNumber*lastNumber;
//       document.getElementById('result').value=result;
//        alert('Its a Multification Function');
//   }
//   function divCal(){
//       var firstNumber = Number(document.getElementById('firstNumber').value);
//       var lastNumber = Number(document.getElementById('lastNumber').value);
//       var result = firstNumber/lastNumber;
//       document.getElementById('result').value=result;
//       alert('Its a Divided Function');
//   }
//   function moduCal(){
//       var firstNumber = Number(document.getElementById('firstNumber').value);
//       var lastNumber = Number(document.getElementById('lastNumber').value);
//       var result = firstNumber%lastNumber;
//       document.getElementById('result').value=result;
//       alert('Its a Modulas Function');
//   }


</script>