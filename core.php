<h2>Core</h2>
<h3>Lorem ipsum dolor sit amet</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<hr>

<h3>Breakpoints</h3>
<p>CS-SPEED incluye diferentes breackpoints para cada tamaño de la pantalla del dispositivo, la siguiente tabla muestra los tamaños disponibles y sus equivalencias, mismas que pueden ser editadas en el archivo <b>"css/base/base.less"</b>.</p>

<table class="table is--rows">
    <thead>
        <tr>
            <td>Tamaño</td>
            <td>Breackpoint</td>
            <td>Variable</td>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Mobile</td>
            <td>768px</td>
            <td>@mobile</td>
        </tr>
        <tr>
            <td>Tablet</td>
            <td>769px</td>
            <td>@tablet</td>
        </tr>
        <tr>
            <td>Desktop</td>
            <td>968px</td>
            <td>@desktop</td>
        </tr>
    </tbody>
</table>

<hr>

<h3>Arquitectura CSS</h3>
<p>CSS SPEED está construido bajo el modelo BEM (Bloque, Elemento, Modificador) ya que este modelo mantiene un estándar de nomenclatura de selectores para un mejor mantenimiento y lectura del código.</p>

<h4>Bloque</h4>
<p>El bloque es un contenedor que dentro tiene diversos elementos. Puede que tengas un encabezado, pie de página, una barra lateral y un área de contenido principal; cada uno de estos sería considerado como un <b>bloque.</b></p>

<h4>Elemento</h4>
<p>Un elemento es una pieza dentro de un bloque, vamos a usar el ejemplo en una persona, supongamos que la persona es un <b>Bloque,</b> entonces un elemento podría ser su <b>mano.</b></p>

<h4>Modificador</h4>
<p>Los modificadores son para reutilizar módulos pero con algunos cambios de diseño sin tener que escribirlos de 0, estos siempre escriben con <b>"is--"</b> al comienzo, veamos aplicado el ejemplo de la <b>persona:</b></p>

<pre>
<code class="css hljs">
/* Bloque */
.person { }

/* Elemento */
.person__hand { }

/* Modificador */
.is--woman { }
</code>
</pre>

