      <table class="table table-bordered">
        <thead>
            <th>
              Nombre
            </th>
            <th>
              A&ntilde;o
            </th>
            <th>
              Discografica
            </th>
        </thead>
        <tbody id="tblBodyDiscos">
          {foreach $discos as $disco}
              <tr>
                <td>{$disco['nombre']}</td>
                <td>{$disco['anio']}</td>
                <td>{$disco['discografica']}</td>
              </tr>
          {/foreach}
        </tbody>
        </table>

        </div>
      </div>
    </div>
