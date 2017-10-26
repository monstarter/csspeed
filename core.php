<h2>Core</h2>
<h4>Lorem ipsum dolor sit amet</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<hr>

<h4>Breakpoints</h4>
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
        <tr>
            <td>Widescreen</td>
            <td>1180px</td>
            <td>@widescreen</td>
        </tr>
    </tbody>
</table>

<hr>

<h4>Arquitectura CSS</h4>
<p>CS-SPEED está construido bajo el modelo BEM (bloque, elemento, modificador) ya que este modelo mantiene un estándar de nomenclatura de selectores para un mejor mantenimiento y lectura del código.</p>

<h3>Bloque</h3>
<p>El bloque es un contenedor o contexto donde el elemento se encuentra presente. Piensa como si fueran partes estructurales de código más grandes. Puede que tengas un encabezado, pie de página, una barra lateral y un área de contenido principal; cada uno de estos sería considerado como un bloque.</p>


<h3>Elemento</h3>
<p>Un elemento es una pieza dentro de un bloque, en su sintaxis, estos deben contener el elemento padre tal como se muestra en el siguiente ejemplo:</p>
<pre>
    <code class="language-css">
        .header__logo { }
    </code>
</pre>


<h3>Modificador</h3>
<p>Los modificadores son para reutilizar los módulos pero con algunos cambios de diseño sin tener que escribirlos de 0, los modificadores siempre se escriben con “is—“ al comienzo del modificador, en el siguiente ejemplo, suponemos que tenemos un botón y queremos añadir un modificador para que tenga los bordes redondeados:</p>
<div>
<pre>
    <code class="language-css">
        .is--rounded {
            border-radius: 4px;
        }
    </code>
</pre>
</div>
