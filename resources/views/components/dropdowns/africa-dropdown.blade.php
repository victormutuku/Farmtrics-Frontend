<select name="africancountry" id="africadropdown" class="border-2 mb-6 py-4 pl-4 rounded-2xl">
    <option value="">{{ __('partners.Choose a country') }}</option>
</select>

<script>
    var select = document.getElementById('africadropdown');
    var countryList = [
        'Algeria','Angola','Benin','Botswana','Burkina Faso','Burundi',
        'Cameroon','Cape Verde','Central African Republic',
        'Chad','Comoros','Congo','Congo, the Democratic Republic of the',
        'Côte d\'Ivoire','Djibouti','Egypt','Equatorial Guinea','Eritrea',
        'Ethiopia','Gabon','Gambia','Ghana','Guinea','Guinea-Bissau',
        'Kenya','Lesotho','Liberia','Libya','Madagascar','Malawi','Mali',
        'Mauritania','Mauritius','Morocco','Mozambique','Namibia','Niger',
        'Nigeria','Rwanda','Sao Tome and Principe','Senegal','Seychelles',
        'Sierra Leone','Somalia','South Africa','South Sudan','Sudan',
        'Tanzania, United Republic of','Togo','Tunisia','Uganda','Zambia',
        'Zimbabwe',
    ];
