import bo6List from "@/json/black-ops-six/equipment/lethal.json";
import bo6ZombiesList from "@/json/black-ops-six/zombies/lethal.json";
import warzoneList from "@/json/warzone/equipment/lethal.json";
import mw3ZombiesList from "@/json/modern-warfare-three/zombies/lethal.json";

const lethalEquipment: Record<string, any> = {
  "black-ops-six": bo6List,
  "black-ops-six-zombies": bo6ZombiesList,
  warzone: warzoneList,
  "modern-warfare-three-zombies": mw3ZombiesList,
};

export function getLethalList(game: string): any {
  return lethalEquipment[game] || {};
}
