let calendar;

  document.addEventListener("DOMContentLoaded", async function () {
    // Fecha actual
    const newDate = new Date();
  
    // Devuelve el mes actual con formato 2 dígitos (ej: 04)
    function getDynamicMonth() {
      let month = newDate.getMonth() + 1;
      return month < 10 ? `0${month}` : `${month}`;
    }
  
    // Elementos del formulario/modal
    const getModalTitleEl = document.querySelector("#event-title");
    const getModalIdProfesor = document.querySelector("#id_profesor");
    const getModalStartDateEl = document.querySelector("#event-start-date");
    const getModalEndDateEl = document.querySelector("#event-end-date");
    const getModalAddBtnEl = document.querySelector(".btn-add-event");
    var getModalUpdateBtnEl = document.querySelector(".btn-update-event");
    const calendarEl = document.querySelector("#calendar");
    
    // Mapeo de colores de eventos
    const calendarsEvents = {
      Danger: "danger",
      Success: "success",
      Primary: "primary",
      Warning: "warning",
    };

    // Mapeo de estado según el tipo de evento
    const estadoMap = {
      Danger: 0,
      Success: 1
    };
  
    // Detectar si la ventana es pequeña  
    const checkWidowWidth = () => window.innerWidth <= 1199;
    // Configuración de la cabecera del calendario
    const calendarHeaderToolbar = {
      left: "prev next addEventButton",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay",
    };
  
    // Obtener eventos desde el backend (Flask)
    let calendarEventsList = [];
    try {
      const response = await fetch("http://localhost:5000/asignaciones/guardadas");
      calendarEventsList = await response.json();
    } catch (error) {
      console.error("Error al cargar los eventos desde el servicio web:", error);
    }
  
    // Acción al seleccionar un rango de fechas
    const calendarSelect = function (info) {
      getModalAddBtnEl.style.display = "block";
      getModalUpdateBtnEl.style.display = "none";
      myModal.show();
      getModalStartDateEl.value = info.startStr;
      getModalEndDateEl.value = info.endStr;
    };
    // Mostrar el modal con fecha actual para añadir evento
    const calendarAddEvent = function () {
      const currentDate = new Date();
      const dd = String(currentDate.getDate()).padStart(2, "0");
      const mm = String(currentDate.getMonth() + 1).padStart(2, "0");
      const yyyy = currentDate.getFullYear();
      const combineDate = `${yyyy}-${mm}-${dd}T00:00:00`;
  
      getModalAddBtnEl.style.display = "block";
      getModalUpdateBtnEl.style.display = "none";
      myModal.show();
      getModalStartDateEl.value = combineDate;
    };
    // Acción al hacer clic en un evento (mostrar modal para editar)
    const calendarEventClick = function (info) {
      const eventObj = info.event;
      if (eventObj.url) {
        window.open(eventObj.url);
        info.jsEvent.preventDefault();
      } else {
        const eventId = eventObj._def.publicId;
        const level = eventObj._def.extendedProps["calendar"];
        const radio = document.querySelector(`input[value="${level}"]`);
  
        getModalTitleEl.value = eventObj.title;
        
        if (radio) radio.checked = true;
        console.log(JSON.stringify(eventObj, null, 2));
        const idProfesor = eventObj.extendedProps.idProfesor;
        if (idProfesor) {
            getModalIdProfesor.value = idProfesor;
          }

        getModalUpdateBtnEl.setAttribute("data-fc-event-public-id", eventId);
        getModalAddBtnEl.style.display = "none";
        getModalUpdateBtnEl.style.display = "block";
        myModal.show();
      }
    };
  
    // Inicializar el calendario
      calendar = new FullCalendar.Calendar(calendarEl, {
      selectable: true,
      height: checkWidowWidth() ? 900 : 1052,
      initialView: checkWidowWidth() ? "listWeek" : "dayGridMonth",
      initialDate: `${newDate.getFullYear()}-${getDynamicMonth()}-07`,
      headerToolbar: calendarHeaderToolbar,
      events: calendarEventsList,
      select: calendarSelect,
      unselect: () => console.log("unselected"),
      customButtons: {
        addEventButton: {
          text: "Añadir",
          click: calendarAddEvent,
        },
      },
      // Aplicar clase de color al evento
      eventClassNames: ({ event }) => {
        const color = calendarsEvents[event._def.extendedProps.calendar];
        return ["event-fc-color", `fc-bg-${color}`];
      },
      eventClick: calendarEventClick,
      windowResize: function () {
        if (checkWidowWidth()) {
          calendar.changeView("listWeek");
          calendar.setOption("height", 900);
        } else {
          calendar.changeView("dayGridMonth");
          calendar.setOption("height", 1052);
        }
      },
    });
  
    calendar.render();
  // Inicializar el modal
    const myModal = new bootstrap.Modal(document.getElementById("eventModal"));
    // Limpiar el modal cuando se cierra
    document.getElementById("eventModal").addEventListener("hidden.bs.modal", () => {
      getModalTitleEl.value = "";
      getModalStartDateEl.value = "";
      getModalEndDateEl.value = "";
      getModalIdProfesor.value = "";
      const checkedRadio = document.querySelector('input[name="event-level"]:checked');
      if (checkedRadio) checkedRadio.checked = false;
    });
  
    // Botón de actualizar evento
    getModalUpdateBtnEl.addEventListener("click", async function () {
      const id = this.dataset.fcEventPublicId;
      const title = getModalTitleEl.value;
      const idProfesor = getModalIdProfesor.value;
      const event = calendar.getEventById(id);
      const level = document.querySelector('input[name="event-level"]:checked')?.value || "";      
      // Actualizar visualmente el evento en el calendario
      event.setProp("title", title);
      event.setExtendedProp("calendar", level);
      const estado = estadoMap[level] ?? -1;
      try {
        // Llamada al web service de CodeIgniter 4 para actualizar el estado
        const response = await fetch("http://localhost:8080/api/eventos/cambiar-estado", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify({
            id_evento: id,
            estado: estado,
            title:title,
            idProfesor:idProfesor
          })
        });
    
        if (!response.ok) throw new Error("No se pudo actualizar el estado en el servidor");
        const result = await response.json();
        console.log(result.message);
      } catch (error) {
        console.error("Error:", error);
        alert("Ocurrió un error al actualizar el evento");
      }
    
      myModal.hide();
    });
   // Botón para añadir evento al calendario (solo visual)
    getModalAddBtnEl.addEventListener("click", function () {
      const level = document.querySelector('input[name="event-level"]:checked')?.value || "";
      calendar.addEvent({
        id: Date.now(), // genera un ID único
        title: getModalTitleEl.value,
        start: getModalStartDateEl.value,
        end: getModalEndDateEl.value,
        allDay: true,
        extendedProps: { calendar: level },
      });
      myModal.hide();
    });
  });
  


  async function recargarEventosCalendario(calendar) {
    try {
      const response = await fetch("http://localhost:5000/asignaciones/guardadas");
      const nuevosEventos = await response.json();
      // Elimina todos los eventos del calendario
      calendar.removeAllEvents();

      // Agrega los nuevos eventos
      nuevosEventos.forEach(evento => {
        calendar.addEvent(evento);
      });

    } catch (error) {
      console.error("Error al recargar los eventos:", error);
      alert('Error al recargar los eventos del calendario');
    }
  }
  
  


  
  
  document.getElementById('btnLlamarServicios').addEventListener('click', () => {
    fetch('http://localhost:8080/generarhorariostesis', {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if (!response.ok) throw new Error("Error en el primer servicio");
        return response.json();
    })
    .then(data => {
        if (data.success) {          
            return fetch('http://localhost:5000/asignaciones', {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json'
                }
            });
        } else {
            throw new Error("El primer servicio devolvió un error.");
        }
    })
    .then(response => {
        if (!response.ok) throw new Error("Error en el segundo servicio");
        return response.json();
    })
    .then(data => {
         if (Array.isArray(data)) {
          recargarEventosCalendario(calendar); // Usamos variable global
          } else {
              throw new Error("El segundo servicio devolvió un error.");
          }
    })
    .catch(error => {
        alert('Ocurrió un error: ' + error.message);
        console.error('Error:', error);
    });
  });
  