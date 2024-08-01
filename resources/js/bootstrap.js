/** IMPORTANDO FRAMEWORK BOOTSTRAP */
import 'bootstrap';
import axios from 'axios';
window.axios = axios;

import Swal from "sweetalert2";
window.Swal = Swal;


/*import { Chart, registerables } from 'chart.js';
Chart.register(...registerables);*/

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
