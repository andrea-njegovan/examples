<div id="search_area" class="col_12 column">
    <form class="horizontal" method="post" action="<?php echo $this->webroot; ?>jobs/browse">
        <input name="keywords" id="keywords" type="text" placeholder="Enter Keywords..." />
        <select name="state" id="state_select">
            <option>Select State</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="AO">Angola</option>
            <option value="AR">Argentina</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="BS">Bahamas</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BO">Bolivia</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BR">Brazil</option>
            <option value="BG">Bulgaria</option>
            <option value="CA">Canada</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CO">Colombia</option>
            <option value="CR">Costa Rica</option>
            <option value="HR">Croatia</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DO">Dominican Republic</option>
            <option value="EG">Egypt</option>
            <option value="EE">Estonia</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KR">Korea</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LU">Luxembourg</option>
            <option value="MK">Macedonia</option>
            <option value="MG">Madagascar</option>
            <option value="MT">Malta</option>
            <option value="MX">Mexico</option>
            <option value="MO">Monaco</option>
            <option value="ME">Montenegro</option>
            <option value="MA">Morocco</option>
            <option value="NP">Nepal</option>
            <option value="NZ">New Zealand</option>
            <option value="NG">Nigeria</option>
            <option value="NO">Norway</option>
            <option value="PK">Pakistan</option>
            <option value="PE">Peru</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="QA">Qatar</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="SM">San Marino</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SK">Slovakia</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="TW">Taiwan</option>
            <option value="TR">Turkey</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UY">Uruguay</option>
            <option value="VE">Venezuela</option>
            <option value="ZM">Yemen</option>
            <option value="ZW">Zimbabwe</option>
        </select>
        <select id="category_select" name="category">
            <option>Select Category</option>
            <?php foreach($categories as $category) : ?>
                <option value="<?php echo $category['Category']['id']; ?>"><?php echo $category['Category']['name']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>