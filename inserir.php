 <meta charset="UTF-8">
 <style>
     .demo {
         border: 1px solid #C0C0C0;
         border-collapse: collapse;
         padding: 5px;
     }

     .demo th {
         border: 1px solid #C0C0C0;
         padding: 5px;
         background: #F0F0F0;
     }

     .demo td {
         border: 1px solid #C0C0C0;
         padding: 5px;
     }
 </style>

 <form name="dadospessoa" action="conexao.php" method="POST">

     <table class="demo">

         <tbody>
             <tr>
                 <td>Nome</td>
                 <td><input type="text" name="nome" value="" /></td>
             </tr>
             <tr>
                 <td>Salario</td>
                 <td><input type="decimal" name="salario" value="" /></td>
             </tr>


             <tr>
                 <td><input type="hidden" name="acao" value="inserir" /></td>
                 <td><input type="submit" value="Enviar" name="Enviar" /></td>
             </tr>
         </tbody>
     </table>

 </form>