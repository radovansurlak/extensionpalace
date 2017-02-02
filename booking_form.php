
<form name ="contactform" method ="post" action ="send_form_email.php" >
    <table width ="450px" >
        <tr >
            <td valign ="top" >
                <label for ="first_name" >First Name * </label >
            </td >
            <td valign ="top" >
                <input  type ="text"name ="first_name"maxlength ="50"size ="30" >
            </td >
        </tr >
        <tr >
            <td valign ="top">
            <label for="last_name">Last Name</label>
            </td>
            <td valign="top">
                <input  type="text" name="last_name" maxlength="50" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="email">Email Address *</label>
            </td>
            <td valign="top">
                <input  type="text" name="email" maxlength="80" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="telephone">Telephone Number</label>
        </td>
            <td valign="top">
                <input  type="text" name="telephone" maxlength="30" size="30">
            </td>
        </tr>
        <tr>
            <td valign="top">
                <label for="service">Service</label>
            </td>
            <td valign="top">
                    <select name="service">
                        <optgroup label="HAIR">
                            <option value="Women Cut (short hair)">Women Cut (short hair)</option>
                            <option value="Women Cut (long hair)">Women Cut (long hair)</option>
                            <option value="Bangs">Bangs</option>
                            <option value="Bathing and Grooming (short hair)">Bathing and Grooming (short hair)</option>
                            <option value="Bathing and Grooming (long hair)">Bathing and Grooming (long hair)</option>
                            <option value="Color (short hair)">Color (short hair)</option>
                            <option value="Color (long hair)">Color (long hair)</option>
                            <option value="Colouring of the bottom">Colouring of the bottom</option>
                            <option value="Color and reflexes (short hair)">Color and reflexes (short hair)</option>
                            <option value="Color and reflexes (long hair)">Color and reflexes (long hair)</option>
                            <option value="Reflexes m. Film (short hair)">Reflexes m. Film (short hair)</option>
                            <option value="Reflexes m. Film (long hair)">Reflexes m. Film (long hair)</option>
                            <option value="Reflexes m. Cap (short hair)">Reflexes m. Cap (short hair)</option>
                            <option value="Reflexes m. Cap (long hair)">Reflexes m. Cap (long hair)</option>
                            <option value="Toning of the bottom">Toning of the bottom</option>
                            <option value="Toning (short hair)">Toning (short hair)</option>
                            <option value="Toning (long hair)">Toning (long hair)</option>
                        </optgroup>
                        <optgroup label="HAIR EXTENSIONS">
                            <option value="Tape on and off">Tape on and off</option>
                            <option value="Easy weft">Easy weft</option>
                        </optgroup>
                         <optgroup label="EYEBROWS AND EYELASHES">
                            <option value="Color Eyebrows<">Color Eyebrows</option>
                            <option value="Color tilts">Color tilts</option>
                            <option value="Direction of eyebrows">Direction of eyebrows</option>
                            <option value="Luxury Pack">Luxury Pack</option>
                        </optgroup>
                         <optgroup label="NAILS">
                            <option value="Chellac full color">Chellac full color</option>
                            <option value="Chellac French">Chellac French</option>
                        </optgroup>
                         <optgroup label="PERMANENT MAKEUP">
                             <optgroup label="Bryn - Microblading / Hairstroke">
                                <option value="1. Treatment">1. Treatment</option>
                                <option value="2. Treatment">2. Treatment</option>
                                <option value="3. Treatment">3. Treatment</option>
                            </optgroup>
                             <optgroup label="Bryn - Powder Brows">
                                <option value="1. Treatment">1. Treatment</option>
                                <option value="2. Treatment">2. Treatment</option>
                                <option value="3. Treatment">3. Treatment</option>
                            </optgroup>
                             <optgroup label="Lips - Full">
                                <option value="1. Treatment">1. Treatment</option>
                                <option value="2. Treatment">2. Treatment</option>
                                <option value="3. Treatment">3. Treatment</option>
                            </optgroup>
                             <optgroup label="Lips - Contour / Fade">
                                <option value="1. Treatment">1. Treatment</option>
                                <option value="2. Treatment">2. Treatment</option>
                                <option value="3. Treatment">3. Treatment</option>
                            </optgroup>
                        </optgroup>
                         <optgroup label="EYELASH EXTENSIONS">
                            <option value="New Set - Single lashes / 3D">New Set - Single lashes / 3D</option>
                            <option value="New Set - Russian volume">New Set - Russian volume</option>
                        </optgroup>
                         <optgroup label="FILLING">
                            <option value="Within 2 weeks">Within 2 weeks</option>
                            <option value="Within 3 weeks">Within 3 weeks</option>
                            <option value="Within 4 weeks">Within 4 weeks</option>
                    </select>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="date">Date</label>
        </td>
            <td valign="top">
                <form>
                    <input id="datepicker" />
                </form>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="comments">Comments *</label>
            </td>
            <td valign="top">
                <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
            </td>
</tr>

        <tr>
            <td colspan="2" style="text -align:center">
        <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
