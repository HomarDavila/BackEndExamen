/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var parBusqueda = new Object();
$(document).ready(function ()
{
    fn_CargarGrilla();
}
);

function fn_CargarGrilla() {
    try {
        $("#divTabla").jqGrid({
            datatype: function () {
                fn_Buscar();
            },
            colModel: [
                {name: 'Editar', index: 'Editar', label: 'Edit', width: 70, align: "center",
                    formatter: fn_BotonEditar, search: false, sortable: false, fixed: true
                },
                {
                    name: 'name',
                    index: 'name',
                    label: 'name',
                    width: 350
                },

                {
                    name: 'email',
                    index: 'email',
                    label: 'email',
                    width: 350
                },

                {
                    name: 'position',
                    index: 'position',
                    label: 'position',
                    width: 300
                },

                {
                    name: 'salary',
                    index: 'salary',
                    label: 'salary',
                    width: 200
                },

                {
                    name: 'position',
                    index: 'position',
                    label: 'position',
                    hidden: true
                },

                {
                    name: 'phone',
                    index: 'phone',
                    label: 'phone',
                    hidden: true
                },

                {
                    name: 'address',
                    index: 'address',
                    label: 'address',
                    hidden: true
                },

                {
                    name: 'skills',
                    index: 'skills',
                    label: 'skills',
                    hidden: true
                }
            ],
            whith: 1200,
            height: 300,
            pager: "#divPieTabla",
            rowNum: 10,
            headertitles: true,
            rowList: [10, 20],
            sortname: "name",
            sortorder: "asc",
            viewrecords: true,
            gridview: true,
            altRows: true,
            searching: {
                defaultSearch: "cn"
            },
            caption: 'Listado de Personal'
        }).jqGrid("filterToolbar");

        function fn_BotonEditar(cellvalue, options, rowObject) {
            return "<img src='../img/ico_edit.gif' width='16px' height='16px' alt='Editar Registro' " +
                    "onclick=\"javascript:fn_Editar('" + rowObject.name + "','" + rowObject.email + "','" + rowObject.phone + "','" + rowObject.address + "','" + rowObject.position + "','" + rowObject.salary + "','" + rowObject.skills + "');\" style='cursor:pointer;'/>";
        }
    } catch (e) {
        alert(e);
    }
}

function fn_Buscar() {
    try {
        $.ajax({
            url: '../bd/employees.json',
            async: true,
            type: 'post',
            dataType: "json",
            success: function (response) {
                $('#divTabla').jqGrid('clearGridData', true);
                $('#divTabla')[0].addJSONData(response);
            }
        });
    } catch (e) {
        alert(e);
    }
}

function fn_Editar(pName, pEmail, pPhone, pAddress, pPosition, pSalary, pSkills) {
    try {
        $('[id*=txtName]').val(pName);
        $('[id*=txtEmail]').val(pEmail);
        $('[id*=txtPhone]').val(pPhone);
        $('[id*=txtAddress]').val(pAddress);
        $('[id*=txtPosition]').val(pPosition);
        $('[id*=txtSalary]').val(pSalary);

        $('[id*=ddlskills]').empty();
        $.each([{"skill": "Python"}, {"skill": "CSS"}, {"skill": "C#"}, {"skill": "JS"}, {"skill": "Lisp"}], function (i, objSkill) {
            $('[id*=ddlskills]').append($('<option>', {
                value: i,
                text: objSkill.skill
            }));
        });

        $('#dvRegistro').dialog({
            modal: true,
            title: 'Registro',
            width: 500,
            height: 350,
            resizable: false,
            hide: true
        });

        $('#dvRegistro').dialog("open");
    } catch (e) {
        alert(e);
    }
}
