/* Adding some html tags into tooltip and popovers allowlist */
$(window).on('load', function() {
  $.fn.tooltip.Constructor.Default.allowList.table = []
  $.fn.tooltip.Constructor.Default.allowList.thead = []
  $.fn.tooltip.Constructor.Default.allowList.tbody = []
  $.fn.tooltip.Constructor.Default.allowList.tr = []
  $.fn.tooltip.Constructor.Default.allowList.td = []
  $.fn.tooltip.Constructor.Default.allowList.th = []
  $.fn.tooltip.Constructor.Default.allowList.button = []
  $.fn.tooltip.Constructor.Default.allowList.input = []
})


/*
  begin::Tanımlamalar Yetki Setleri Detay Stepper
  Stepper element
*/
window.addEventListener("DOMContentLoaded", () => {
  var element = document.querySelector(
    "#pw_stepper_tanimlamalar_yetki_setleri"
  );

  if (!element) return;

  // Initialize Stepper
  var stepper = new KTStepper(element);
  stepperInitialize(element);

  // Handle navigation click
  stepper.on("kt.stepper.click", function (stepper) {
    stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step

    stepperInitialize(element);
  });

  // Handle next step
  stepper.on("kt.stepper.next", function (stepper) {
    stepper.goNext(); // go next step

    stepperInitialize(element);
  });

  // Handle previous step
  stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step

    stepperInitialize(element);
  });
});

const stepperCalcComplated = (el) => {
  const allItems = el.querySelectorAll(".stepper-item");
  const complatedItems = Array.from(
    el.querySelectorAll(".stepper-item.completed")
  );
  let currentItem;
  allItems.forEach((item, i) => {
    if (allItems[i].classList.contains("current")) {
      currentItem = allItems[i];
      if (!complatedItems.includes(currentItem)) {
        complatedItems.push(currentItem);
      }
    }
  });
  let result = complatedItems;
  return result;
};

const setProgressWidth = (items, el) => {
  const stepperNav = document.querySelector(".stepper-nav");
  let progressDiv = stepperNav.querySelector(".stepper-progress");
  if (!progressDiv) {
    progressDiv = document.createElement("div");
    progressDiv.classList.add("stepper-progress");
    stepperNav.appendChild(progressDiv);
  }
  const allItems = el.querySelectorAll(".stepper-item");
  const progressBarWidth = (100 / allItems.length) * items.length;
  progressDiv.style.width = `${progressBarWidth}%`;
};

const stepperInitialize = (element) => {
  const complatedItems = stepperCalcComplated(element);
  setProgressWidth(complatedItems, element);
};

// end::Tanımlamalar Yetki Setleri Detay Stepper

// begin::Sidebar menu accordion change collapse feature

// This function allows the click action of the accordion-shaped menu item in the
// Sidebar to take action only when the icon in it is clicked,instead of the entire item area.
// @usage: In order to run this code, it will be sufficient to add the
// data-pw-menu-trigger="click" attribute to an element that will be in the menu-link element in the menu-item menu-accordion main menu item.
// @note: To use this code, make sure that the data-kt-menu-trigger="click" attribute is not included in the menu-item menu-accordion main menu item.

// document.addEventListener("DOMContentLoaded", () => {
//   const allCollapseBtns = document.querySelectorAll(
//     ".menu-item .menu-link .menu-arrow[data-pw-menu-trigger]"
//   );
//   if (!allCollapseBtns) return;
//   allCollapseBtns.forEach((el, key) => {
//     el.addEventListener("click", () => {
//       if (el == allCollapseBtns[key]) el = el.parentNode.parentNode;
//       el.classList.toggle("hover");
//       el.classList.toggle("show");
//     });
//   });
// });

window.addEventListener('DOMContentLoaded', () => {
  const getAllTriggers = document.querySelectorAll('[data-pw-menu-trigger="click"]')
  if (getAllTriggers.length > 0) {
    getAllTriggers.forEach((item) => {

      KTMenu.createInstances();
      const menuElement = document.querySelector("#kt_app_sidebar_menu");
      const menu = KTMenu.getInstance(menuElement);

      menuToggler(item, menu)
    })
  }
})

const menuToggler = (el, menu) => {
  const target = getTarget(el)
  const menuSub = target.querySelector('.menu-sub.menu-sub-accordion')
  target.setAttribute('data-pw-active', '0');
  el.addEventListener('click', () => {
    if (target.getAttribute('data-pw-active') == '0') {
      target.setAttribute('data-pw-active', '1');
      menu.show(menuSub)
      target.classList.add('hover')
      target.classList.add('showing')
      setTimeout(() => {
       target.classList.remove('showing')
       target.classList.add('show') 
      }, 300);
    }
    else {
      target.setAttribute('data-pw-active', '0');
      menu.hide(menuSub)
      target.classList.remove('hover')
      target.classList.add('hiding')
      setTimeout(() => {
        target.classList.remove('hiding')
        target.classList.remove('show')
      }, 300);
    }
  })
}

const getTarget = (el) => {
  const target = document.querySelector(el.getAttribute('data-pw-target'))
  if (!target) {
    console.error('No attribute named data-pw-target found!')
    return;
  }
  return target
} 

// end::Sidebar menu accordion change collapse feature

// begin::Table Selection Add

window.addEventListener("DOMContentLoaded", () => {
  const getAllTriggers = document.querySelectorAll(
    "*[data-pw-toggle=table-selection-add]"
  );
  if (getAllTriggers.length > 0) {
    getAllTriggers.forEach((item) => {
      addTableSelection(item);
    });
  }
});

const addTableSelection = (el) => {
  el.addEventListener("click", () => {
    targetEls = getTable(el);
    targetEls.forEach((item) => {
      createTableRow(item, el);
    });
  });
};

const getTable = (el) => {
  const target = el.getAttribute("data-pw-target");
  const tables = document.querySelectorAll(`table#${target}`);
  return tables;
};

const createTableRow = (el, btn) => {
  const getFirstRowThisTable = el.querySelector("tbody tr:first-of-type");

  const selectionRow = getFirstRowThisTable.cloneNode(true);

  el.querySelector("tbody").insertBefore(
    selectionRow,
    el.querySelector("tbody").firstChild
  );

  // İlk satırın son elemanını sakla
  const lastCell = getFirstRowThisTable.lastElementChild;

  // İlk satırın içindeki tüm öğeleri sil
  while (selectionRow.firstChild) {
    selectionRow.removeChild(selectionRow.firstChild);
  }

  // İlk satırın son elemanını yeniden ekle
  selectionRow.appendChild(lastCell.cloneNode(true));

  const addingEmptyCols = getFirstRowThisTable.children.length - 2;

  createEmptyCols(addingEmptyCols, selectionRow);

  addGroupSelectBox(selectionRow, btn);
};

const createEmptyCols = (colsCount, row) => {
  for (let i = 0; i < colsCount; i++) {
    const emptyCol = document.createElement("td");
    emptyCol.innerText = "-";
    row.insertBefore(emptyCol, row.firstChild);
  }
};

const addGroupSelectBox = (el, btn) => {
  const options = btn.getAttribute("data-pw-options");
  if (!options) {
    console.error(
      "Options not found. Please make sure you include the data-pw-options attribute."
    );
    return;
  }

  const optArray = strToArray(options);

  // td elementi oluştur
  const tdElement = document.createElement("td");

  // select elementi oluştur
  const selectElement = document.createElement("select");

  // select elementine form-select class'ını ekle
  selectElement.classList.add("form-select");
  selectElement.classList.add("pw-table-selection");

  // select elementine data-control attribute'u ataması yap
  selectElement.setAttribute("data-control", "select2");
  selectElement.setAttribute("data-select2initializer", "0");

  // select elementine data-placeholder attribute'u ataması yap
  selectElement.setAttribute("data-placeholder", "Seçim yapın");

  const optLabel = btn.getAttribute("data-pw-select-label");
  let selectOptGroupElement;
  if (optLabel) {
    selectOptGroupElement = document.createElement("optgroup");
    selectOptGroupElement.setAttribute("label", "Gruplar");
  }

  const emptyOptionElement = document.createElement("option");

  selectElement.appendChild(emptyOptionElement);

  // groups Array'indeki değerleri option olarak select elementine ekle
  optArray.forEach((group) => {
    const optionElement = document.createElement("option");
    optionElement.value = group;
    optionElement.textContent = group;
    if (optLabel) {
      selectOptGroupElement.appendChild(optionElement);
    } else {
      selectElement.appendChild(optionElement);
    }
  });
  if (optLabel) selectElement.appendChild(selectOptGroupElement);

  // el elementinin içine td elementini ilk sırada ekle
  el.insertBefore(tdElement, el.firstChild);

  // td elementinin içine select elementini ekle
  tdElement.appendChild(selectElement);

  $(selectElement).select2();
  $(selectElement).attr("data-select2initializer", "1");
  $(selectElement)
    .data("select2")
    .$dropdown.addClass("pw-table-selection-dropdown");

  $(selectElement).on("select2:select", (e) => {
    const selectedItem =
      selectElement.options[selectElement.selectedIndex].value;
    const iconClass = btn.getAttribute("data-pw-fw-icon");
    let selectionPreview;
    if (iconClass) {
      selectionPreview = `<div class="d-flex align-items-center flex-nowrap gap-2"><div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"><i class="${iconClass} pw-text-primary-500"></i></div><div>${selectedItem}</div></div>`;
    } else {
      selectionPreview = `<div class="d-flex align-items-center flex-nowrap gap-2"><div class="w-35px h-35px  d-inline-flex align-items-center justify-content-center rounded-circle pw-bg-neutral-100 flex-shrink-0"></div><div>${selectedItem}</div></div>`;
    }
    el.querySelector("td:first-of-type").innerHTML = selectionPreview;
  });
};

// end::Table Selection Add

// begin::String to array

const strToArray = (str) => {
  const validJSONString = str.replace(/'/g, '"');
  const array = JSON.parse(validJSONString);
  return array;
};

// end::String to array

// begin::Check card

window.addEventListener("DOMContentLoaded", () => {
  const getAllTriggers = document.querySelectorAll(
    "*[data-pw-check-card='true']"
  );
  if (getAllTriggers) {
    getAllTriggers.forEach((item) => {
      item.setAttribute('data-wp-initialized', '1')
      const checkbox = item.querySelector('input[type=checkbox]')
      checkbox.addEventListener('change', () => {
        if (checkbox.checked) {
          item.classList.add('pw-bg-primary-100');
        }
        else {
          item.classList.remove('pw-bg-primary-100')
        }
      })
    })
  }
});

// end::Check card

// begin::Disabled radio switcher 

window.addEventListener("DOMContentLoaded", () => {
  const getAllTriggers = document.querySelectorAll(
    '*[data-pw-toggle="disabled-radio-switcher"]'
  );
  if (getAllTriggers.length > 0) {
    getAllTriggers.forEach((item) => {
      const hideTarget = getHideTarget(item)
      const showTarget = getShowTarget(item)
      const input = getInput(item)
      if (!hideTarget && !showTarget && !input) {
        console.error('The specified attributes could not be found. Please check the attributes.')
        return;
      }
      switcherEvent(hideTarget, showTarget, input)
    })
  }
});

const getHideTarget = (trigger) => {
  const hideTarget = trigger.querySelector(`${trigger.getAttribute('data-pw-hide-target')}`)
  if (!hideTarget) {
    console.error('No attribute named data-pw-hide-target found!')
    return;
  }
  return hideTarget;
}

const getShowTarget = (trigger) => {
  const showTarget = trigger.querySelector(`${trigger.getAttribute('data-pw-show-target')}`)
  if (!showTarget) {
    console.error('No attribute named data-pw-show-target found!')
    return;
  }
  return showTarget;
}

const getInput = (trigger) => {
  const input = trigger.querySelector(`${trigger.getAttribute('data-pw-input')}`)
  if (!input) {
    console.error('No attribute named data-pw-input found!')
    return;
  }
  return input;
}

const endDateConditional = (hideTrigger, showTrigger, input) => {
  if (hideTrigger.checked == true) {
    input.setAttribute('disabled', true)
  }
  else if (showTrigger.checked == true) {
    input.removeAttribute('disabled')
  }
  else {
    input.setAttribute('disabled', true)
  }
}

const switcherEvent = (hideTarget, showTarget, input) => {
  hideTarget.addEventListener('change', () => endDateConditional(hideTarget, showTarget, input));
  showTarget.addEventListener('change', () => endDateConditional(hideTarget, showTarget, input));
}


// end::Disabled radio switcher

// begin::Hours options

window.addEventListener("DOMContentLoaded", () => {
  const getAllTriggers = document.querySelectorAll(
    '*[data-pw-hours-options=true]'
  );
  if (getAllTriggers.length > 0) {
    getAllTriggers.forEach((item, k) => {
      createHours(item)
      $(getAllTriggers[k]).select2({
        minimumResultsForSearch: -1
      });
    })
  }
});

const createHours = (e) => {
  for (let saat = 0; saat <= 23; saat++) {
    for (let dakika = 0; dakika < 60; dakika += 30) {
      //Saati ve dakikayı formatlı bir şekilde oluşturuyoruz
      let saatDakika = `${String(saat).padStart(2, '0')}:${String(dakika).padStart(2, '0')}`;

      // Option elementini oluşturuyoruz
      let option = document.createElement('option');
      option.text = saatDakika;
      option.value = saatDakika;

      // Option elementini select elementine ekliyoruz
      e.appendChild(option);
    }
  }
}

// end::Hours option

// begin::Check all


window.addEventListener("DOMContentLoaded", () => {
  const getAllTriggers = document.querySelectorAll(
    '*[data-pw-check-all=true]'
  );
  if (getAllTriggers.length > 0) {
    getAllTriggers.forEach((item) => {
      const checks = getAllChecks(item)
      checkAll(item, checks)
    })
  }
});

const getAllChecks = (trigger) => {
  const checks = document.querySelectorAll(`*[data-pw-check-all-target="#${trigger.id}"]`)
  if (!checks) {
    console.error('No attribute named data-pw-check-all-target found!')
    return;
  }
  return checks;
}

const checkAll = (trigger, checks) => {
  if (checks.length > 0) {
    checks.forEach((item) => {
      trigger.addEventListener('change', () => {
        if (trigger.checked == true) {
          item.checked = true
        }
        else {
          item.checked = false
        }
      })
    })
  }
}

// end::Check all

// begin::Nav check

window.addEventListener('DOMContentLoaded', () => {
  const getAllTriggers = document.querySelectorAll('[data-pw-nav-check="true"]');
  if (getAllTriggers.length > 0) {
    getAllTriggers.forEach((item) => {
      const getTarget = getTabTarget(item)
      activeCheck(getTarget, item)
    })
  }
})

const getTabTarget = (trigger) => {
  const targetTab = document.querySelector(trigger.getAttribute('data-pw-nav-check-target'))
  if (!targetTab) {
    console.error('No attribute named data-pw-nav-check-target found!')
    return;
  }
  return targetTab;
}

const activeCheck = (target, trigger) => {
  const tabItems = target.querySelectorAll('nav-link')
  console.log(tabItems)
  if (!tabItems) {
    console.error('nav-link is not found!')
    return;
  }
  tabItems.forEach((item) => {
    selectCheck(item, trigger)
    item.addEventListener('change', () => {
      selectCheck(item, trigger)
    })
  })
}

const selectCheck = (target, trigger) => {
  if (target.classList.contains('active')) {
    trigger.checked = true
  }
  else {
    trigger.checled = false
  }
}

// end::Nav check