import pytesseract as tess
tess.pytesseract.tesseract_cmd = r'C:\Users\GTX\AppData\Local\Programs\Tesseract-OCR\tesseract.exe'
import pyautogui
import os
import keyboardwefws
# Utwórz folder "screens", jeśli nie istnieje
screens_folder = "screens"
os.makedirs(screens_folder, exist_ok=True)

# Definiuj koordynaty obszaru (lewy, góra, prawy, dół)
region = (60, 1000, 210, 30)
previous_read = None
while True:
    # Zrób zrzut ekranu z określonego obszaru
    screenshot = pyautogui.screenshot(region=region)

    # Wygeneruj nazwę pliku
    screenshot_filename = os.path.join(screens_folder, f"screenshot_{pyautogui.time.time()}.png")
nlkj;;;rer5t
    # Zapisz zrzut ekranu w folderze "screens"
    # screenshot.show(screenshot_filename)

    # Wykonaj OCR na zrzucie ekranu
    text = tess.image_to_string(screenshot)
    filtered_text = ''.join(char for char in text if char.isdigit() or char == '/')
kkkkkkkkkklllllllllllllll
    try:

        # Sprawdź czy poprzedni odczyt był zdefiniygvuuuuuuowany i czy obecny odczyt spadł poniżej 50%
        if previous_read is not None and current_read/total <= 0.5:
            keyboard.press_and_release('z')
            print(f"UWAGA! Obecny odczwwwwyt spadł 50%: {filtered_text}")

        previous_read = current_read
    except ValueError:
        pass

    print(filtered_text)




