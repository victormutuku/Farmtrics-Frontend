<select name="industry" id="industrydropdown" class="border-2 mb-6 py-4 pl-4 rounded-2xl">
    <option value="">Industry</option>
</select>

<script>
    var select = document.getElementById('industrydropdown');
    var indList= ['Agriculture', 'FMCGs', 'Government Services','NGOs', 'Manufacturing', 'Supply, Wholesale and Logistics', 'Other'];

    for(var i = 0; i < indList.length; i++){
    var ind = indList[i];
    var element = document.createElement("option");
    element.textContent = ind;
    element.value = ind;
    select.appendChild(element);
}
</script>