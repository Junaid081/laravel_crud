
<form action = "/update/{{$dat->id}}" method = "post">
        @csrf      
         <table>
            <tr>
               <td>Name</td>
               <td>
                  <input type = 'text' name = 'id' 
                     value = '{{$dat->id}}'/>
               </td>
               <td>
                  <input type = 'text' name = 'name' 
                     value = '{{$dat->name}}'/>
               </td> 
               <td>
                  <input type = 'text' name = 'message' 
                     value = '{{$dat->message}}'/>
               </td>               

            </tr>
            <tr>
               <td colspan = '2'>
                  <input type = 'submit' value = "Update student" />
               </td>
            </tr>
         </table>
      </form>