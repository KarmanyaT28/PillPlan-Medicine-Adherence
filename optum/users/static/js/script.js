const dayTimeLogo = document.querySelectorAll('.day-time__logo'),
  modalShowBtn = document.querySelector('#modal-show-btn'),
  modalMedicine = document.querySelector('#medicine-modal'),
  modalMedicineCloseBtn = document.querySelector('#medicine-modal-close'),
  medicineAddBtn = document.querySelector('#medicine-add-btn'),
  medicineTypes = document.querySelectorAll('.select-medicine__type'),
  medicineMethods = document.querySelectorAll('.select-medicine__method-time'),
  dateInput = document.querySelector('#time-input'),
  dayTimeMorning = document.querySelector('#day-time-morning'),
  dayTimeAfternoon = document.querySelector('#day-time-afternoon'),
  dayTimeEvening = document.querySelector('#day-time-evening'),
  dayTimeNight = document.querySelector('#day-time-night');

let weekDays;
const daysQuant = 7;
const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
const medicineAllDataArr = [];

function MedicineSingleData(id, medName, date, formatedDate, value, dosage, type, method, status) {
  this.id = id;
  this.medName = medName;
  this.date = date;
  this.formatedDate = formatedDate;
  this.value = value;
  this.dosage = dosage;
  this.type = type;
  this.method = method;
  this.status = status;
}

//Show schedule on click
dayTimeLogo.forEach(logo => {
  logo.addEventListener('click', (e) => e.currentTarget.closest('.day-time').querySelector('.day-time__schedule').classList.toggle('schedule-show'));
});

//Show and hide modal on clicks
modalShowBtn.addEventListener('click', () => modalMedicine.classList.add('modal-show'));
modalMedicineCloseBtn.addEventListener('click', () => modalMedicine.classList.remove('modal-show'));

//Add medicine active property in modal
const addActiveMedicineProperty = (props, className) => {
  props.forEach(prop => {
    prop.addEventListener('click', (e) => {
      props.forEach(type => type.classList.remove(className));
      e.currentTarget.classList.add(className);
    });
  });
};

addActiveMedicineProperty(medicineTypes, 'active-medicine-type');
addActiveMedicineProperty(medicineMethods, 'active-medicine-method');

//Filter medicines by week days
const addAndFilterMedicine = (currentWeekDay) => {
  const schedules = document.querySelectorAll('.day-time__schedule');
  const allDays = document.querySelectorAll('.week-day');

  schedules.forEach(schedule => schedule.innerHTML = '');

  const filteredMedicineByDates = medicineAllDataArr.filter(data => currentWeekDay.slice(0, 10) == data.formatedDate.slice(0, 10));

  filteredMedicineByDates.forEach(medicine => {
    const id = medicine.id,
      type = medicine.type,
      date = medicine.date,
      formatedDate = medicine.formatedDate,
      medName = medicine.medName,
      value = medicine.value,
      dosage = medicine.dosage,
      method = medicine.method,
      status = medicine.status;

    const medicineSingleBlock = createMedicine(id, type, date, formatedDate.slice(-8, -3), medName, value, dosage, method, status);

    const addMedicineInDaytime = (daytime) => {
      const schedule = daytime.querySelector('.day-time__schedule');
      schedule.append(medicineSingleBlock);
      schedule.classList.add('schedule-show');
    };

    const currentHour = +formatedDate.slice(-8, -6);

    allDays.forEach(day => {
      day.classList.remove('active-week-day');
      if (currentWeekDay.slice(0, 10) == day.dataset.weekdate.slice(0, 10)) {
        day.classList.add('active-week-day');
      }
    });

    if (5 <= currentHour && currentHour < 12) {
      addMedicineInDaytime(dayTimeMorning);
    } else if (12 <= currentHour && currentHour < 17) {
      addMedicineInDaytime(dayTimeAfternoon);
    } else if (17 <= currentHour && currentHour < 20) {
      addMedicineInDaytime(dayTimeEvening);
    } else {
      addMedicineInDaytime(dayTimeNight);
    }

    medicineLeftTime();
  });
};

//Add medicine in current daytime on click in modal
medicineAddBtn.addEventListener('click', (e) => {
  e.preventDefault();
  const medicineNameInput = document.querySelector('#select-medicine-name').value,
    dosageValueInput = document.querySelector('#dosage-value-input').value,
    dosageQuantityInput = document.querySelector('#dosage-quantity-input').value,
    dateInputValue = document.querySelector('#time-input').value,
    date = new Date(dateInputValue),
    formatedDate = date.toLocaleString(),
    id = Math.floor(Math.random() * 99999999),
    status = 'enabled';

  const activePropName = (props, className, dataName) => {
    let activeType;
    props.forEach(type => {
      if (type.classList.contains(className)) {
        activeType = type;
      }
    });

    if (activeType !== undefined) {
      return activeType.dataset[dataName];
    }
  };

  const typeName = activePropName(medicineTypes, 'active-medicine-type', 'medtype');
  const typeMethod = activePropName(medicineMethods, 'active-medicine-method', 'method');

  if (medicineNameInput !== '' &&
    dosageValueInput !== '' &&
    dosageQuantityInput !== '' &&
    dateInputValue !== '' &&
    typeName !== undefined &&
    typeMethod !== undefined
  ) {
    const newMedicine = new MedicineSingleData(id, medicineNameInput, date, formatedDate, dosageValueInput, dosageQuantityInput, typeName, typeMethod, status);

    medicineAllDataArr.push(newMedicine);

    addAndFilterMedicine(formatedDate);

    updateArrInLocalSrtorage();
  }
});

medicineAddBtn.addEventListener('mousedown', (e) => {
  e.currentTarget.classList.add('background-add-btn');
});

medicineAddBtn.addEventListener('mouseup', (e) => {
  e.currentTarget.classList.remove('background-add-btn');
});

//Create medicine html-block
const createMedicine = (id, typeImgSrc, date, dateShow, name, value, quantity, eating, status) => {
  const newMedicine = document.createElement('div');
  newMedicine.className = `pill ${status}`;
  newMedicine.setAttribute('data-id', `${id}`);
  newMedicine.innerHTML = `
  <div class="pill__image">
    <img src="img/${typeImgSrc}.svg" alt="capsule-img" class="pill__image-img">
  </div>
  <div class="pill__time">
    <p class="pill__time-title">Time</p>
    <p data-date="${date}" class="pill__time-amount">${dateShow}</p>
  </div>
  <div class="pill__descr">
    <p class="pill__name">${name}</p>
    <p class="pill__amount">${value}, ${quantity} qt.</p>
    <p class="pill__eating">${eating}</p>
  </div>
  <div class="pill__left">
    <p class="pill__left-title">Time left</p>
    <p class="pill__left-quant"></p>
  </div>
  <div class="pill__complete">
    <div class="pill__check">
      <img id="mecicine-complete" src="img/checked.svg" alt="pill-complete-icon" class="pill__check-icon">
    </div>
    <div id="mecicine-cancel" class="pill__check">
      <img src="img/error.svg" alt="pill-cancel-icon" class="pill__check-icon">
    </div>
  </div>  
  `;

  return newMedicine;
};

//Create timer for left time medicine, add listener for check medicine btns
const medicineLeftTime = () => {
  const medicines = document.querySelectorAll('.pill');

  medicines.forEach(medicine => {
    const medicineTime = new Date(medicine.querySelector('.pill__time-amount').dataset.date);
    const leftTime = medicine.querySelector('.pill__left-quant');
    const medCompleteBtn = medicine.querySelector('#mecicine-complete');
    const medCancelBtn = medicine.querySelector('#mecicine-cancel');

    const calculateTime = () => {
      const now = new Date();
      const currentTime = medicineTime.getTime() - now.getTime();

      if (now.getTime() < medicineTime.getTime() && !leftTime.classList.contains('disabled-timer')) {
        const days = Math.floor(currentTime / (1000 * 60 * 60 * 24));
        const hours = Math.floor((currentTime / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((currentTime / (1000 * 60)) % 60);
        const seconds = Math.floor((currentTime / 1000) % 60);

        if (days <= 0) {
          leftTime.innerHTML = `${hours} h : ${minutes} m : ${seconds} s`;
        } else {
          leftTime.innerHTML = `${days} d : ${hours} h 
          <br> 
          ${minutes} m : ${seconds} s`;
        }

        if (hours === 0 && minutes === 0 && seconds === 0) {
          clearInterval(timer);
          alert("Take Medicine")
        }

        if (medicine.classList.contains('disabled')) {
          clearInterval(timer);
          leftTime.textContent = '0 : 0 : 0';
        }
      } else {
        leftTime.textContent = '0 : 0 : 0';
      }
    };

    const timer = setInterval(() => calculateTime(), 1000);

    medCompleteBtn.addEventListener('click', (e) => {
      const medId = e.currentTarget.closest('.pill').dataset.id;

      medicineAllDataArr.map(data => {
        if (data.id == medId) {
          data.status = 'disabled';
        }
      });

      clearInterval(timer);
      leftTime.textContent = '0 : 0 : 0';
      leftTime.classList.add('disabled-timer');
      medicine.classList.remove('enabled');
      medicine.classList.add('disabled');

      updateArrInLocalSrtorage();
    });

    medCancelBtn.addEventListener('click', (e) => {
      const medId = e.currentTarget.closest('.pill').dataset.id;

      const indexId = medicineAllDataArr.findIndex(data => {
        return data.id == medId;
      });

      if (indexId !== -1) {
        medicineAllDataArr.splice(indexId, 1);
      }

      medicine.classList.add('hide-medicine');
      setTimeout(() => medicine.remove(), 300);

      updateArrInLocalSrtorage();
    });
  });
};

//Create week day 
const createWeekDay = (dayNumber, dayName, weekDate) => {
  const weekDay = document.createElement('div');
  weekDay.className = 'week-day';
  weekDay.setAttribute('data-weekdate', `${weekDate}`);
  weekDay.innerHTML = `
    <div class="week-day__number">${dayNumber}</div>
    <div class="week-day__name">${dayName}</div>
  `;

  return weekDay;
};

//Set date and push in html
const createDates = (days) => {
  const medicineWeek = document.querySelector('#medicine-week');

  const result = new Date();
  result.setDate(result.getDate() + days);

  const dayName = dayNames[result.getDay()];
  const dayNumber = result.getDate();

  medicineWeek.append(createWeekDay(dayNumber, dayName, result.toLocaleString()));
};


//Add several days in html
for (let i = 0; i <= daysQuant; i++) {
  createDates(i);
  weekDays = document.querySelectorAll('.week-day');
}

//Add active class to week day on click
weekDays.forEach(day => {
  weekDays[0].classList.add('active-week-day');

  day.addEventListener('click', (e) => {
    addAndFilterMedicine(e.currentTarget.dataset.weekdate.slice(0, 10));

    weekDays.forEach(day => {
      day.classList.remove('active-week-day');
    });

    day.classList.add('active-week-day');
  });
});

//Set max date in modal 
const setMaxDaysInput = (days) => {
  const result = new Date();
  result.setDate(result.getDate() + days);
  return result;
};

dateInput.max = setMaxDaysInput(7).toISOString().slice(0, -5);
dateInput.min = new Date().toISOString().slice(0, -5);

//Add medicine all data arr in Local storage 
const updateArrInLocalSrtorage = () => localStorage.setItem('medicineAllDataArr', JSON.stringify(medicineAllDataArr));


let savedArr = localStorage.getItem('medicineAllDataArr');
savedArr = JSON.parse(savedArr);

//Load medicines data from local storage and add in html
if (savedArr) {
  medicineAllDataArr.push(...savedArr);

  medicineAllDataArr.forEach(data => {
    addAndFilterMedicine(data.formatedDate);
  });
}