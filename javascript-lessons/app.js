

//import { double, triple} from './library.js';

import { doUltimateMath } from './library.js';
import { render } from './renderMania.js';

const outlet = document.querySelector('output');

// outlet.innerHTML = `Double = ${double(4)} & Triple = ${triple(4)}`;

outlet.innerHTML = `Total: ${doUltimateMath(4)}`;

render( outlet, doUltimateMath(4));