
/**
 * 
 * @param {* range_inpt, color_inpt} int_value 
 * 
 */
function change_color(int_value) {
    var range_inpt = int_value;

    var color_inpt = document.getElementById("clr").value;

    var c;
    if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(color_inpt)) {
        c = color_inpt.substring(1).split('');
        if (c.length == 3) {
            c = [c[0], c[0], c[1], c[1], c[2], c[2]];
        }
        c = '0x' + c.join('');
        var rgba = '(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255, range_inpt].join(',') + ')';

        var x = [(c >> 16) & 255];

        var y = [(c >> 8) & 255];

        // var z = [c & 255];

        var z = [range_inpt];

        var a = "rgb(" + x + "," + y + "," + z + ")";

        a = a.split("(")[1].split(")")[0];

        a = a.split(",");

        var b = a.map(function (x) {             //For each array element
            x = parseInt(x).toString(16);      //Convert to a base16 string
            return (x.length == 1) ? "0" + x : x;  //Add zero if we get only one character
        })

        b = "#" + b.join("");

        document.body.style.background = b;

        return rgba;
    }
    throw new Error('Bad Hex');
}
